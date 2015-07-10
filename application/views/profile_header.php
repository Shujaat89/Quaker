<html>
	<head>
	<title><?=$username?>'s Profile Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?=base_url();?>assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>	
	<script src="<?=base_url();?>assets/js/custom.js"></script>
	</head>
	<body>

		
		<div class="nav navbar-default header_div" >

			
				<div class="logo"><img src="<?=base_url();?>assets/imgs/logo.png" class="logo_img"><span class="logo-font"> QuAkEr</span></div>
				<div class="search_form">
					<form class="form-inline " action="<?=base_url();?>services/login" method="post">
				
				  	<div class="form-group header_form_height">
				    <table><tr><td class="searchTb"><input type="text" class="form-control" id="search" placeholder="Find People Here" name="search"></td>
				    	<td><input type="submit" id="srchbtn" class="btn btn-primary status_btns" value="Search"></td></tr>
				    </table>
					    
					  	

					 

					  	
	  				</div> <!-- from-group header_div -->

	  				 </form>
				</div>
				<button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
			  			<li ><a href="<?=base_url();?>services/loadProfile">Home</a></li>
			  			<li ><a href="<?=base_url();?>services/loadMyProfile">Profile</a></li>
			  			<li ><a href="#">Settings</a></li>
			  			<li ><a href="<?=base_url();?>services/logout">Log out</a></li>
			  			</ul>
				</div>
				
					
					
				
	  		
	  		
	  		
	  		
	  	</div>	<!-- nav -->
	  
	