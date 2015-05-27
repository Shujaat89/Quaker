<html>
	<head>
	<title><?=$username?>'s Profile Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?=base_url();?>assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/custom.js"></script>
	</head>
	<body class="body-background">

		

	
		<div class="row header_div">
			<div class="col-md-9 ">

				<form class="form-inline " action="<?=base_url();?>services/login" method="post">
				
				  	<div class="form-group header_form_height">
				    
					    <input type="text" class="form-control searchbar" id="search" placeholder="Find People Here" name="search">
					  	<input type="submit" id="srchbtn" class="btn btn-primary" value="Search">

					  

					  	
	  				</div> <!-- from-group header_div -->
	  		</div> <!-- col-md-6 -->
	  		
	  		<div class="col-md-3 header_links_custom_height">
	  				<a href="#">Home</a>
	  				<a href="#">Profile</a>
	  				<a href="#">Settings</a>
	  				<a href="<?=base_url();?>">Log out</a>

	  		</div> <!-- col-md-6 -->
	  	</div>	<!-- row -->
	
	  
	 
	  
	</form>