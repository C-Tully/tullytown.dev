<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('form_validation');
		//$this->load->library('../controllers/validation');
		   $config = array(
        	 array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required',
                 'errors' => array(
                	'required' => 'You must provide a %s.',
            	)
        ),
        	array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array(
                	'required' => 'You must provide a %s.',
            	)
            )
        );

       
		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules($config);


		//Todo: If the validation fails to run then what?
        if ($this->form_validation->run() == FALSE)
        {     
           $this->load->view('welcome_message');
         } else {
         	  $this->load->view('welcome_message'); //load error message?
         }

		
		
	}
}
