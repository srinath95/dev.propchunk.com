<?php

/*

Editor :Gouri Javed Mehboob Ali
status:-pending 
*/

Class Verify_Model extends CI_Model {

	//function to check the hash for verifyication of emailid and upadte teh active level
	public function checkhash($hash){
		$query = $this->db->where('HashKey',$hash)->get('RegisteredUser');
		if($query){
			$this->db->where('HashKey',$hash);
			$data = array('ActiveLevel' => 1, );
			$this->db->update('RegisteredUser',$data);
			return TRUE;
		}else{

			return FALSE;

		}
	}//end of check hash function

	//function to check the EmailId  is exist or not
	public function checkuser($email){

		$query = $this->db->where('EmailId',$email)->get('RegisteredUser');
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}//end of checkuser
}//end of class verify_model
?>