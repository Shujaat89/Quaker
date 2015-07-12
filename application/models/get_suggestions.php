<?php

class get_suggestions extends CI_Model{

	 function getSuggestions($query){

	 	$usersrqst = $query;
	 	if(isset($usersrqst)){
	 		$result = $this->db->query("SELECT * from users WHERE name LIKE '".$query."%'");
			if($result->num_rows()>0){

				$row = $result->row();
				$response['name'] = $row->name;
				$response['id'] = $row->id; 

				return $response;
			}
	 	}

		

			
		
	}
}

 ?>