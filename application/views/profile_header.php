<html>
	<head>
	<title><?=$username?>'s Profile Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?=base_url();?>assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/custom.js"></script>
	</head>
	<body class="body-background">
		<div class="container">
			<div class="row">
				<div class="col-sm-10">
					<input type="text" name="search" id="search"> 
					<button class="btn">Search</button>
				</div>
				<div class="col-sm-2">
					<a href="#">Home</a>
					<a href="#">Messages</a>
					<a href="#">Profile</a>
					<a href="#">Settings</a>
				</div>
			</div>
		</div>