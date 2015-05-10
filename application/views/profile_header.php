<html>
	<head>
	<title><?=$username?>'s Profile Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?=base_url();?>assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/custom.js"></script>
	</head>
	<body class="body-background">

	
		<div class="row">
			<div class="col-md-6">

				<form class="form-inline " action="<?=base_url();?>services/login" method="post">
				
				  	<div class="form-group header_div">
				    
					    <input type="text" class="form-control searchbar" id="search" placeholder="Find People Here" name="search">
					  	<input type="submit" id="srchbtn" class="btn btn-primary" value="Search">

					  

					  	
	  				</div> <!-- from-group header_div -->
	  		</div> <!-- col-md-6 -->
	  		
	  		<div class="col-md-6">
	  		

	  		</div> <!-- col-md-6 -->
	  	</div>	<!-- row -->
	
	  
	 
	  
	</form>