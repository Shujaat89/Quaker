<html>
	<head>
	<title><?=$username?>'s Profile Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?=base_url();?>assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/custom.js"></script>
	</head>
	<body>

		
		<nav class="nav navbar-default header_div" role="navigation">

			<div class="col-md-9 ">
				<div class="logo"><img src="<?=base_url();?>assets/imgs/logo.png" class="logo_img"><span class="logo-font"> QuAkEr</span></div>

				<form class="form-inline " action="<?=base_url();?>services/login" method="post">
				
				  	<div class="form-group header_form_height">
				    
					    <input type="text" class="form-control searchbar" id="search" placeholder="Find People Here" name="search">
					  	<input type="submit" id="srchbtn" class="btn btn-primary status_btns" value="Search">

					  

					  	
	  				</div> <!-- from-group header_div -->
	  		</div> <!-- col-md-9 -->
	  		<ul class="nav navbar-nav">
	  			<li ><a href="#">Home</a></li>
	  			<li ><a href="#">Profile</a></li>
	  			<li ><a href="#">Settings</a></li>
	  			<li ><a href="<?=base_url();?>">Log out</a></li>
	  		</ul>
	  		
	  		
	  	</nav>	<!-- nav -->
	  
	</form>