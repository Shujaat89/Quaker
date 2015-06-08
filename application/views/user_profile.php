<div class="container wrapper">
	<div class="user_pic_div">
			<?php if(isset($pic)) {echo "will add soon";}
					else{?><img src="<?=base_url();?>assets/imgs/no-img.jpg" class="user_pic"><?php } ?>
		</div> <!-- user_pic_div -->
	<div class="user_info">
		<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Personal Info</a></li>
		  <li role="presentation"><a href="#">Education and Work</a></li>
		  <li role="presentation"><a href="#">Contact</a></li>
		</ul> <!-- unav nav-tabs -->

		<div class="user_info_load">
			<table><tr><td><span class="user_info_label">Name</span></td><td><input type="text" class="form-control user_info_text" placeholder="Recipient's username" aria-describedby="basic-addon2"></td></tr>
				<tr><td><span class="user_info_label">Username</span></td><td><input type="text" class="form-control user_info_text" placeholder="Recipient's username" aria-describedby="basic-addon2"></td></tr>
				<tr><td><span class="user_info_label">About</span></td><td><textarea id="txtArea" rows="10" cols="70" class="form-control user_info_text"></textarea></td></tr>
			</table>
			 
		</div> <!-- user_info_load -->

	</div> <!-- user_info -->
</div> <!-- container -->