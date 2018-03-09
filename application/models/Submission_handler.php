<?php
class Submission_handler extends CI_Model {

	public function submit($data){
			 // $this->title    = $_POST['title']; // please read the below note
    //             $this->content  = $_POST['content'];
    //             $this->date     = time();
		echo 'submit function';
		die();
    	$this->db->insert('entries', $this);

	}

	public function emailNotification(){

	}
	
	public function emailUser($email){

	}


}