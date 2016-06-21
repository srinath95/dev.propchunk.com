<?php

Class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('Auth_Model'); //Model of which contain all the database activity
		
		// Load email
		$this->load->helper('email');

		//load date 
		$this->load->helper('date');
	}


	public function new_user_registration() {
		$HashKey=md5(mt_rand());
		$date = date('Y-m-d H:i:s');
		$data = array(
		'FirstName' => $this->input->post('FirstName'),
		'LastName' => $this->input->post('LastName'),
		'PhoneNumber' => $this->input->post('PhoneNumber'),
		'EmailId' => $this->input->post('EmailId'),
		'PassWord' => md5($this->input->post('password')),
		'ActiveLevel' => 0,
		'HashKey' =>$HashKey,
		'CreateUserId' => $this->input->post('EmailId'),
		'CreateDate' => $date
		);
		$result = $this->Auth_Model->registration_insert($data);
			if ($result == TRUE) {
			
			//code for email  
				$data = '<div class="alert alert-success"><p>Registration Successfully and verification email has been send to email!</p></div>';
				$this->session->set_flashdata('message',$data);
				$email= $this->input->post('EmailId');
				$hash=$HashKey;
				$sendmail = array(
					'Name'=>$this->input->post('FirstName'),
					'EmailId' => $email,
					'HashKey' => $hash,
					'flag' => 1
					);
				$error=$this->create_email($sendmail);
					echo $error;
					//redirect('Home/auth');	
				
			} else {
				$data = '<div class="alert alert-danger"><p>email id is already register</p></div>';
				$this->session->set_flashdata('message',$data); 
				redirect('Home/auth');
				}
		}//end of the new_user_registration function
	
		



		public function user_login_process() {
			
			$this->form_validation->set_rules('EmailId','EmailId','required|trim|valid_email');
			$this->form_validation->set_rules('Password','Password','required');

			$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
				if($this->form_validation->run()){
					//successs
					//echo "validation successfully";
					$EmailId = $this->input->post('EmailId');
					$Password = $this->input->post('password');
					$login_id = $this->Auth_Model->login_valid($EmailId,$Password);
					if($login_id){
						//successful
						//echo "Password match";
						$this->session->set_userdata('id',$login_id);
						return redirect('Test/dashboard');
					} else {
						$data = "<p class='test-danger'>Username & Password Doent Match</p>";
						$this->session->set_flashdata('login_failed',$data);
						return redirect('Home/auth');
					} 
				}else{
					$this->load->view('header');
					$this->load->view('signup');
					$this->load->view('footer');
				}
		}

	//end of the class

	
		// Logout from admin page
		public function logout() {

		// Removing session data
			//$sess_array = array('username' => '');
			$this->session->unset_userdata('id');
			$data['message_display'] = 'Successfully Logout';
			return redirect('Home/auth');
	}



	public function create_email($sendmail){
		if($sendmail['flag']==1){
			$url=site_url('Verify/email_verify/'.$sendmail['HashKey']);	
			$name=$sendmail['Name'];
			$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Actionable emails e.g. reset password</title>


<style type="text/css">
img {
max-width: 100%;
}
body {
-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;
}
body {
background-color: #f6f6f6;
}
@media only screen and (max-width: 640px) {
  body {
    padding: 0 !important;
  }
  h1 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h2 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h3 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h4 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h1 {
    font-size: 22px !important;
  }
  h2 {
    font-size: 18px !important;
  }
  h3 {
    font-size: 16px !important;
  }
  .container {
    padding: 0 !important; width: 100% !important;
  }
  .content {
    padding: 0 !important;
  }
  .content-wrap {
    padding: 10px !important;
  }
  .invoice {
    width: 100% !important;
  }
}
</style>
</head>

<body itemscope itemtype="http://schema.org/EmailMessage" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">

<table class="body-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
		<td class="container" width="600" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
			<div class="content" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
				<table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
							<meta itemprop="name" content="Confirm Email" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" /><table width="100%" cellpadding="0" cellspacing="0" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
									<td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
								
										Dear '.$name.'
									</td>

										<tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
								
										Thank you for registering on Propchunk.com.	As next step, please confirm your email address by clicking the link below.
									</td>
								</tr>
								<tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
									Please note that only verified users can access their accounts on Propchunk.com and receive offer/alerts in inbox. 

									Please let us know if you face any problem in verifying your account.</td>
								</tr>
								<tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
										<a href="'.$url.'" class="btn-primary" itemprop="url" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #348eda; margin: 0; border-color: #348eda; border-style: solid; border-width: 10px 20px;">Confirm email address</a>
									</td>
								</tr><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
										&mdash;Propchunk CrowdInvesting
									</td>
								</tr></table></td>
					</tr></table><div class="footer" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">
					<table width="100%" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="aligncenter content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">Follow <a href="http://twitter.com/mail_gun" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;">@Propchunk_CrowdInvesting</a> on Twitter.</td>
						</tr></table></div></div>
		</td>
		<td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
	</tr></table></body>
</html>
 ';	

		}
		else{

			$url="http://localhost/dev.propchunk.com/verify/forget_password/".$sendmail['HashKey'];
		}
		$this->load->library('email');
      	$this->email->set_newline("\r\n");
      	$this->email->from('hello@propchunk.com'); // change it to yours
      	$this->email->to($sendmail['EmailId']);// change it to yours

		$this->email->subject('Activate Your Account');
		$this->email->message($message);
      	if($this->email->send()){

      		return  "send";
      	}
      	else{
      			return $this->email->print_debugger();
      	}

		
	}

}


?>