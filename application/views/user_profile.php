	<div class="container wrapper">
	<div class="user_pic_div">
			<?php if(isset($pic)) {echo "will add soon";}
					else{?><img src="<?=base_url();?>assets/imgs/no-img.jpg" class="user_pic"><?php } ?>
		</div> <!-- user_pic_div -->
	<div class="user_info">
		<ul class="nav nav-tabs">
		  <li role="presentation" class="anchor active" id="user_personal_info"><a href="#">Personal Info</a></li>
		  <li role="presentation" class="anchor " ><a href="#" id="edu_work">Education and Work</a></li>
		  <li role="presentation" class="anchor "><a href="#" id="contact">Contact</a></li>
		</ul> <!-- unav nav-tabs -->

		<div class="user_info_load" id="personal_info" onclick="changeText(this)">
			<table><tr><td><span class="user_info_label">Name</span></td><td><input type="text" class="form-control user_info_text" placeholder="Recipient's username" aria-describedby="basic-addon2"></td></tr>
				<tr><td><span class="user_info_label">Username</span></td><td><input type="text" class="form-control user_info_text" placeholder="Recipient's username" aria-describedby="basic-addon2"></td></tr>
				<tr><td><span class="user_info_label">About</span></td><td><textarea id="txtArea" rows="10" cols="70" class="form-control user_info_text"></textarea></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

		<div class="user_info_load " id="user_edu_work" >
			<table><tr><td><span class="user_info_label">Work</span></td><td><input type="text" class="form-control " placeholder="Where do you work" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">University</span></td><td><input type="text" class="form-control " placeholder="University" aria-describedby="basic-addon2 " id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">High School</span></td><td><input type="text" class="form-control " placeholder="High School" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

		<div class="user_info_load " id="user_contact">
			<table><tr><td><span class="user_info_label">Address</span></td><td><input type="text" class="form-control " placeholder="Address" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">City</span></td><td><input type="text" class="form-control " placeholder="City" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
				<tr><td><span class="user_info_label">Country</span></td><td><input type="text" class="form-control " placeholder="Country" aria-describedby="basic-addon2" id="restoff_user_info_labels"></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

	</div> <!-- user_info -->
</div> <!-- container -->