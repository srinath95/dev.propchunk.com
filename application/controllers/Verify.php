<?php

Class Verify extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load database
		$this->load->model('Verify_Model');
		$this->load->helper('form');
	}

	public function email_verify($hash){

		$response=$this->Verify_Model->checkhash($hash);
		if($response==true){
			return redirect('Home/');	
		}else{
			return redirect('');
		}
	}

	public function forgetpassword($hash){
		


	}

	public function checkuser(){
		$email=$this->input->post('EmailId');
		$check = $this->Verify_Model->checkuser($email);
		if($check==true){

			echo "false";
		}else{

			echo "true";
		}
	}





}



?>