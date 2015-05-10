<?php

class Check_login extends CI_Model{

	 function chkLogin($email, $pass){

		$query= $this->db->query("SELECT * FROM users WHERE email='".$email."' AND password='".$pass."'");
		
		if ($query->num_rows() > 0)
			{
			   $row = $query->row(); 

			   $user_data['username']= $row->username;
			   $user_data['id']=$row->id;
			   $user_data['pic']=$row->pic;
			   $user_data['email']= $row->email;

			   return $user_data;
			   
			}

			else{

				return 0;
			}

			
		
	}
}

 ?>