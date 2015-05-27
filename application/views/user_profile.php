
	<div class="wrapper">
	<div id="info_sec" class="info_sec">
	
 <?php if(isset($pic)) {echo "will add soon";}
					else{?><img src="<?=base_url();?>assets/imgs/no-img.jpg" class="user_pic"><?php } ?>
					<div class="side_optns"><a href="#" ><?=$username?></a></div>
					<div class="side_optns"><a href="#">Edit Profile</a></div>
					<div class="side_optns"><a href="#">messages</a></div>
					<div class="side_optns"><a href="#">Friends</a></div>


	</div> <!-- infe_sec -->
	
	<div id="contends">
	<div class="status" class="status">
	<input type="text" class="form-control status_text" placeholder="What's In Your Mind">
	<div class="controll_btns">
	<input type="submit" id="post_status" class="btn btn-primary" value="Post">
	<input type="submit" id="upld_img" class="btn btn-primary" value="Upload Image">
	<input type="submit" id="upld_vdo" class="btn btn-primary" value="Upload Video">
	</div>  <!-- controll_btns -->
	</div> <!-- status -->

		
	</div>	<!-- contends -->
	</div>	<!-- wrapper -->
