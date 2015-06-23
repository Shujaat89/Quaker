<?php

class get_user_info extends CI_Model{

	 function getUserInfo($email){

		$query= $this->db->query("SELECT * FROM users WHERE email='".$email."'");
		
		if ($query->num_rows() > 0)
			{
			   $row = $query->row(); 

			   $user_data['username']= $row->username;
			   $user_data['name']=$row->name;
			   $user_data['id']=$row->id;
			   $user_data['pic']=$row->pic;
			   $user_data['email']= $row->email;
			   $user_data['dob'] = $row->dob;
			   $user_data['phnNo'] = $row->phnNo;
			   $user_data['mobile'] = $row->mobile;
			   $user_data['address'] = $row->address;
			   $user_data['city'] = $row->city;
			   $user_data['country'] = $row->country;
			   $user_data['zipcode'] = $row->zipcode;
			   $user_data['interests'] = $row->interests;
			   $user_data['about'] = $row->about;
			   $user_data['matric'] = $row->matric;
			   $user_data['collage'] = $row->collage;
			   $user_data['uni'] = $row->uni;
			   $user_data['work'] = $row->work;
			   $user_data['comapny'] = $row->company;
			  

			   return $user_data;
			   
			}

			else{

				return 0;
			}

			
		
	}
}

 ?>