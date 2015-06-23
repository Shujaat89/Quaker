	<div class="container wrapper">
	<div class="user_pic_div">
			<?php if($pic !="") {echo "<img class='user_pic' src='".base_url().$pic."'>";
		}
					else{?><img src="<?=base_url();?>assets/imgs/no-img.jpg" class="user_pic"><?php } ?>
		</div> <!-- user_pic_div -->
	<div class="user_info">
		<ul class="nav nav-tabs">
		  <li role="presentation" class="anchor active" id="user_personal_info"><a href="#">Personal Info</a></li>
		  <li role="presentation" class="anchor " ><a href="#" id="edu_work">Education and Work</a></li>
		  <li role="presentation" class="anchor "><a href="#" id="contact">Contact</a></li>
		</ul> <!-- unav nav-tabs -->

		<div class="user_info_load" id="personal_info" onclick="changeText(this)">
			<table><tr><td><span class="user_info_label">Name</span></td><td><input type="text" class="form-control user_info_text" placeholder="<?php if(isset($name)){echo $name;} else {echo "No Name";} ?>" aria-describedby="basic-addon2"></td></tr>
				<tr><td><span class="user_info_label">Username</span></td><td><input type="text" class="form-control user_info_text" placeholder="<?php if(isset($username)){echo $username;} else{echo "No Username";} ?>" aria-describedby="basic-addon2"></td></tr>
				<tr><td><span class="user_info_label">About</span></td><td><textarea id="txtArea" rows="10" cols="70" class="form-control user_info_text"><?php if(isset($about)){echo $about;} else{echo "No About Myself";} ?></textarea></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

		<div class="user_info_load " id="user_edu_work" >
			<table><tr><td><span class="user_info_label">Work</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($work)){echo $work;} else {echo "No Occupation Given";} ?>" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">University</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($comapny)){echo $comapny;} else {echo "No Company Name Provided";} ?>" aria-describedby="basic-addon2 " id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">University</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($uni)){ echo $uni; } else{ echo "No University Provided";}?>" aria-describedby="basic-addon2 " id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">High School</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($collage)){ echo $collage; } else{ echo "No Colalge Provided";}?>" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

		<div class="user_info_load " id="user_contact">
			<table><tr><td><span class="user_info_label">Address</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($address)){ echo $address; } else{ echo "No Address Provided"; }?>" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">City</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($city)){ echo $city;} else{ echo "No City Provided";}?>" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">Country</span></td><td><input type="text" class="form-control " placeholder="<?php if(isset($country)){ echo $country;} else{ echo " No Country Provided";}?>" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

	</div> <!-- user_info -->
</div> <!-- container -->