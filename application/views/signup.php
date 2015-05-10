<html>
<head>
	<title>
		QuAkEr
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>
<body class="body-backgroud">

<div class="container">
    <div class="row login-form">
        <div class="login-form-title"><img src="<?php echo base_url() ?>assets/imgs/logo.png" class="logo-login"><span class="login-banner" >Login</span></div>
        <div class = "col-sm-12 login-form-contents">
            <form role="form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control login-form-textareas" id="name" placeholder="Enter Name">
                    <label for="text">Username</label>
                    <input type="input" class="form-control login-form-textareas" id="username" placeholder="Username">
                    <label for="email">Email</label>
                    <input type="email" class="form-control login-form-textareas" id="email" placeholder="Email">
                    <label for="password">Password</label>
                    <input type="password" class="form-control login-form-textareas" id="password" placeholder="Password">
                    <label for="conf_password">Confirm Password</label>
                    <input type="password" class="form-control login-form-textareas" id="conf_password" placeholder="Confirm Password">
                    <br/>
                    <button type="submit" class="btn btn-default login-btn">Singup</button> <a href="<?php echo base_url(); ?>services/index" class="singup-link">Already a member click here to sigin</a>
                </div>
            </form>
        </div>
        
    </div>
</div>


<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>