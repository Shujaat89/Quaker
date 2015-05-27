<html>
<head>
	<title>
		QuAkEr
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>
<body class="body-backgroud">

<div class="container">
    <div class="row login-form">
        <div class="login-form-title"><img src="<?php echo base_url() ?>assets/imgs/logo.png" class="logo-login"><span class="login-banner" >Login</span></div>
        <div class = "col-sm-12 login-form-contents">
            <form role="form" onsubmit="return false">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control login-form-textareas" id="email" placeholder="Enter Email" name = "email" >
                    <label for="password">Password</label>
                    <input type="password" class="form-control login-form-textareas" id="password" placeholder="Enter Password "  name="password">
                    <span class="invalid_info" id="invalidInfo">Invalid Information please try again</span>
                    <br/>
                    <button  id="login_btn" type="submit" class="btn btn-default login-btn">Login</button> <a href="<?php echo base_url(); ?>services/singup_page" class="singup-link">Not a member click here</a>
                </div> <!-- form-group -->
            </form>
        </div> <!-- login-form-title -->
        
    </div> <!-- row login-form -->
</div> <!-- container -->


<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>