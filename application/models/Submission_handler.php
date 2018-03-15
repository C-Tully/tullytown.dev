<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Submission_handler extends CI_Model {

	public function submit($data){
    	if( $this->db->insert('tbl_contact', $data)){
    		return true;
    	} else{
    		return false;
    	}


	}

	public function emailNotification(){

	}
	
	public function emailUser($email){
		if (valid_email('email@somesite.com'))
		{
        	// echo 'email is valid';
		}

	}


}