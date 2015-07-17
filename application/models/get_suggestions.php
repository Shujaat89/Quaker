<?php

class get_suggestions extends CI_Model{

	 function getSuggestions($query){

	 	$usersrqst = $query;
	 	if(isset($usersrqst)){
	 		$result = $this->db->query("SELECT * from users WHERE name LIKE '".$query."%'");
			if($result->num_rows()>0){
				$row = $result->row();
				for($i=0; $i<$result->num_rows(); $i++){

					$response[$i]["name"]=$row->name;
					$row = $result->next_row();
				}

				
				

				return $response;
			}
	 	}

		

			
		
	}
}

 ?>