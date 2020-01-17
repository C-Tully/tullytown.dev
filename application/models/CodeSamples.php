<?php

namespace App\Driver;

use PDF;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Store;
use App\Models\User;
use App\Customers\Models\Customer;
use App\Customers\Models\CustomerCommunication;
use App\Customers\Models\CustomerBenchmark;
use App\Deals\Models\Deal;
use App\Deals\Models\DealWarranty;
use App\Driver\Models\DriveOpportunity;
use App\Driver\Models\DriveMethod;
use App\Driver\Models\DriveType;
use App\Driver\Models\DriveTemplate;
use App\Driver\Models\DriveActivity;
use App\Driver\Models\DriveSearchable;
use App\Driver\Models\Drive;
use App\Service\Models\Service;
use App\Service\Models\ServiceAppointment;
use App\Vehicles\Models\Vehicle;
use App\Vehicles\Models\VehicleOwnership;
use App\Vehicles\Models\ConstructVehicle;
use App\Vehicles\Models\ConstructVehicleFinancing;

use App\Driver\Classes\DealSheet;
use App\Driver\Classes\DriveActivities;
use App\Library\Log\UserActivity;

/**
 * [DriverController - Handles the management of Driver campaigns ]
 * 
 *
 * @author Christopher Tully <christully12@gmail.com>
 */
class DriverController extends Controller
{
	/**
	 * View - driver type handles default view state based on supplied type
   * @param [Request] - $request
   * @param [String]  - $type
	 *
	 * @return view
	 */
	public function index(Request $request, $type) {
		$type    = DriveType::where('name', $type)->first();
		$store   = Store::first();
		$orderBy = false;

		if(!$type)
			return redirect()->back()->with([
				"error" => "That Driver Type Doesn't Exist."
			]);

		$filters = [
			'score'    		  => ['range', 'score'],
			'score_min'    	=> ['range', 'score'],
			'score_max'	   	=> ['range', 'score'],
			'apr'      		  => ['range', 'apr'],
			'days'     		  => ['range', 'days'],
			'days_min'     	=> ['range', 'days'],
			'days_max'     	=> ['range', 'days'],
			'payment'  		  => ['range', 'payment'],
			'payment_min'  	=> ['range', 'payment'],
			'payment_max'  	=> ['range', 'payment'],
			'lease'   		  => ['range', 'lease'],
			'lease_min'   	=> ['range', 'lease'],
			'lease_max'   	=> ['range', 'lease'],
			'warranty' 		  => ['range', 'warranty'],
			'warranty_min' 	=> ['range', 'warranty'],
			'warranty_max' 	=> ['range', 'warranty'],
			'status'   		  => ['single', 'status'],
			'make'     		  => ['single', 'warranty'],
			'brand'    		  => ['single', 'brand'],
			'type'     		  => ['single', 'type'],
			'penalty'  		  => ['single', 'lease_penalty'],
		];

		$opportunities = DriveOpportunity::where('drive_type_id', $type->id)
      ->orderBy('score', 'desc')
      ->pluck('id')
      ->toArray();

		$oList = DB::table('drive_searchable')->whereIn('drive_opportunity_id', $opportunities);
		foreach($filters as $filter => $spec) {
			if($request->has($filter)) {
				if($spec[0] == 'single') {
					if($request->has($filter))
						$oList = $oList->where($spec[1], $request->get($filter));
				}
			}
			else if($spec[0] == 'range') {
				if($request->has($spec[1].'_max')) {
						//Special cases due to model names being different
					switch(($spec[1])) {
						case 'days':
						case 'days_max' :
						case 'days_min' :
							$orderBy = true;
							$oList = $oList->whereBetween('service_days_out',
                                [$request->get('days_min'), $request->get('days_max')]
                              )
                              ->orderBy('service_days_out', 'DESC');	
						break;
						case 'lease_min':
						case 'lease_max':
							$orderBy = true;
							$oList   = $oList->whereBetween('payment_term',
                                  [$request->get('lease_min'), $request->get('lease_max') ]
                                )
                                ->orderBy('payment_term', 'DESC');
						break;
						case 'warranty_min':
						case 'warranty_max':
							$orderBy = true;
							$oList   = $oList->whereBetween('warranty_months',
                                  [$request->get('warranty_min'), $request->get('warranty_max')]
                                )
                                ->orderBy('warranty_months', 'ASC');	
						break;
						default:
							$orderBy = true;
							$oList = $oList->whereBetween($spec[1], 
                                [$request->get($spec[1].'_min'), $request->get($spec[1].'_max')]
                              )
                              ->orderBy($spec[1],'ASC');		
						break;
					}
				}
			}
		}

		if($request->has('order') && !$orderBy) {
			$oList->orderBy($request->get('orderby'), $request->get('order'));
			$ids           = $oList->pluck('drive_opportunity_id')->toArray();
			$idsOrdered    = implode(',', $ids);
			$opportunities = DriveOpportunity::whereIn('id', $ids)
                        ->orderByRaw(DB::raw("FIELD(id, $idsOrdered)"))
                        ->paginate(15);

		} else if($orderBy) {
			$ids           = $oList->pluck('drive_opportunity_id')->toArray();
			$idsOrdered    = implode(',', $ids);
			$opportunities = DriveOpportunity::whereIn('id', $ids)
                        ->orderByRaw(DB::raw("FIELD(id, $idsOrdered)"))
                        ->paginate(15);

		} else if(){
			$oList->orderBy(DB::raw('SELECT (*),
                                customer_id,
                                COUNT(DISTINCT drive_type_id) as count 
                                FROM drive_opportunities 
                              GROUP BY customer_id 
                              ORDER BY count DESC'
                            ));

			$ids           = $oList->pluck('drive_opportunity_id')->toArray();
			$idsOrdered    = implode(',', $ids);
			$opportunities = DriveOpportunity::whereIn('id', $ids)\
                        ->orderByRaw(DB::raw("FIELD(id, $idsOrdered)"))
                        ->paginate(15);
		} else {
			$opportunities = DriveOpportunity::whereIn('id', $oList->pluck('drive_opportunity_id')->toArray())
                        ->orderBy('score', 'asc')
                        ->paginate(15);
		}

		$campaigns = DriveMethod::all();
		$templates = DriveTemplate::all();

		$times  = [];
		$date   = date("Y-m-d 07:45:00");

		for($i = 0; $i <= 52; $i++) {
			$date = date("g:i A", strtotime("+15 minutes", strtotime($date)));
			array_push($times, $date);
		}

		$min = DriveOpportunity::select('score')->where('drive_type_id', $type->id)->orderBy('score', 'ASC')->first();
		$max = DriveOpportunity::select('score')->where('drive_type_id', $type->id)->orderBy('score', 'DESC')->first();

		$minPayment = DriveSearchable::min('payment');
		$maxPayment = DriveSearchable::max('payment');

		$maxAPR = CustomerBenchmark::select('apr')->orderBy('apr', 'DESC')->first();

		return view('driver::driver.index', [
			'type' 			    => $type,
			'campaigns' 	  => $campaigns,
			'opportunities' => $opportunities->appends($request->except(['page', 'search'])),
			'total' 		    => count($oList->get()),
			'templates' 	  => $templates,
			'times' 		    => $times,
			'warranties' 	  => DealWarranty::where('name', 'NOT LIKE', '%,%')
                          ->where('name', 'NOT LIKE', '%.%')
                          ->where('name', 'NOT LIKE', '')
                          ->where('name', '!=', '-')
                          ->orderBy('name', 'ASC')
                          ->distinct()
                          ->get(['name']),
			'min_score' 	  => ($min ? $min->score : 0),
			'max_score' 	  => ($max ? $max->score : 0),
			'min_payment' 	=> ($minPayment ? $minPayment : 0),
			'max_payment' 	=> ($maxPayment ? $maxPayment : 0),
			'max_apr' 		  => ($maxAPR ? $maxAPR->apr : 0),
			'users'			    => User::all()
		]);
	}

	/**
	 * Client campaign - returns a view based on supplied purl
   *
   * @param [string] - $purl
	 *
	 * @return view
	 */
	public function campaign($purl) {

		$drive = Drive::where('purl', $purl)->first();

		return view('driver::templates.email.purl.enclave', [
			'drive' => $drive,
			'store' => Store::first()
		]);

		$campaign = Drive::where('purl', $purl)->first();
		$store    = Store::first();

		if(!$campaign)
			return "That URL is Invalid, sorry!";

		$opportunity = DriveOpportunity::find($campaign->drive_opportunity_id);

		DriveActivities::add($campaign->id, "visited", "");

		return view('driver::campaign.index', [
			'campaign'    => $campaign,
			'store'       => $store,
			'opportunity' => $opportunity
		]);
	}

  /**
  * [removeOwnership - Removes ownership of a given opportunity]
  * 
  * @param [Request] - $request
  *
  * @return [Redirect] N/A
  */
	public function removeOwnership(Request $request) {
		$opportunity = DriveOpportunity::find($request->get('id'));

		if(!$opportunity)
			return redirect()->back()->with([
				"error" => "That Opportunity Doesn't Exist."
			]);

		$vehicle = Vehicle::where('id', $opportunity->vehicle_id)->withTrashed()->first();

		// No Longer Owns
		if($request->get('status') == "1") {
			$ownership = new VehicleOwnership();
			$ownership->customer_id = $opportunity->customer_id;
			$ownership->vehicle_id  = $vehicle->id;

			if($ownership->save()) {
				$opportunities = DriveOpportunity::where('customer_id', $opportunity->customer_id)
                          ->where('vehicle_id', $opportunity->vehicle_id)
                          ->get();

				foreach($opportunities as $op)
					$op->delete();

				$vehicle->customer_id = null;
				$vehicle->save();
				$vehicle->delete();

				return redirect()->route('driver.index', strtolower($opportunity->type->name))->with([
					"success" => "Successfully Updated Client Vehicle Ownership."
				]);
			}
		}

		// Paid Off
		if($request->get('status') == "2") {
			$benchmark = CustomerBenchmark::where('customer_id', $opportunity->customer_id)
                    ->where('vehicle_id', $opportunity->vehicle_id)
                    ->first();

			if(!$benchmark)
				return redirect()->back()->with([
					"error" => "Problem Processing Your Request."
				]);

			$benchmark->type              = "cash";
			$benchmark->payment_remaining = 0;
			$benchmark->payment_made      = $benchmark->payment_term;

			if($benchmark->save()) {
				$equity = DriveOpportunity::where('drive_type_id', 1)
                    ->where('customer_id', $opportunity->customer_id)
                    ->where('vehicle_id', $opportunity->vehicle_id)
                    ->first();

				if($equity)
					$equity->delete();
			}

			return redirect()->route('driver.index', strtolower($opportunity->type->name))->with([
				"success" => "Successfully Updated Client Vehicle Ownership."
			]);
		}

		// Moved or Deceased
		if($request->get('status') == "3" || $request->get('status') == "4" || $request->get('status') == "5")
		{
			$customer = Customer::find($opportunity->customer_id);

			if(!$customer)
				return redirect()->back()->with([
					"error" => "That Customer Doesn't Exist."
				]);

			foreach($customer->opportunities as $op)
				$op->delete();

			if($customer->delete())
				return redirect()->route('driver.index', strtolower($opportunity->type->name))->with([
					"success" => "Successfully Updated Client Vehicle Status."
				]);
		}

		return redirect()->back()->with([
			"error" => "Problem Processing Your Request."
		]);
	}

  /**
  * [sendDealsheet - Retreives a requested deal sheet ]
  * @param [Request] - $request
  *
  * @return [App/DriveOpportunity] 
  **/
	public function sendDealsheet(Request $request) {
		$opportunity = DriveOpportunity::find($request->get('id'));

		if(!$opportunity)
			return redirect()->back()->with([
				"error" => "That Opportunity Doesn't Exist."
			]);

		return [
      'success'     => 'Success',
      'opportunity' => $opportunity
    ];
	}

  /**
  * [printDealsheet - Serves a processed and compiled PDF to the users browser || Default populated if error.]
  *
  * @param [Request] - $request 
  * @param [Int]     - $id
  *
  * @return [PDF - Stream] 
  **/
	public function printDealsheet(Request $request, $id) {
		$opportunity = DriveOpportunity::find($id);

		if(!$opportunity)
			return redirect()->route('driver.index', 'equity')->with([
				"error" => "That Opportunity Doesn't Exist."
			]);

		$replacement = ConstructVehicle::find($request->get('replacement'));

		if($replacement) {
			$financing = ConstructVehicleFinancing::where('construct_vehicle_id', $replacement->id)
                    ->where('group', 'finance')
                    ->where('type', '!=', 'cash')
                    ->where('term', $opportunity->getBenchmark()->payment_term)
                    ->first();

			$benchmark = $opportunity->getBenchmark();
			$deal      = Deal::where('customer_id', $opportunity->customer_id)->where('vehicle_id', $opportunity->vehicle_id)->first();

			if($financing) {
				$payments = [
          'payment'   => $request->get('payment'), 
          'term'      => $request->get('term'), 
          'rate'      => $request->get('rate'), 
          'price'     => $request->get('price'), 
          'frequency' => $request->get('type')
        ];

				$vehicle = Vehicle::whereNull('customer_id')
          ->where('year', $replacement->year)
          ->where('make', $replacement->make)
          ->where('model', $replacement->model)
          ->first();

				$pdf = PDF::loadView('driver::templates.pdf.sheet',[
                'deal'        => $deal, 
                'vehicle'     => $vehicle,
                'opportunity' => $opportunity, 
                'benchmark'   => $benchmark, 
                'replacement' => $replacement, 
                'payments'    => $payments, 
                'stock'       => $request->get('stock'), 
                'vin'         => $request->get('vin')
              ])
              ->setPaper('a4', 'portrait');

				return $pdf->stream('invoice.pdf');
			}

			return $request->get('replacement');
		}



	}

	public function test()
	{
		$dealsheet = new DealSheet();

		return var_dump($dealsheet);
	}
}