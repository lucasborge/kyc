<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CariKYC</title>

	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap-theme.min.css" />
	<script type="text/javascript" src="/asset/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/asset/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="/asset/css/style.css" />
	<script type="text/javascript" src="/asset/js/login.js"></script>
</head>

<body class="login_body">
    <div id="main">
        <div class="container">
            <div class="row login-container">
                <div class="col-md-12 login-title">
                    <h2><img/logo.png></h2>
                </div>
                <div class="col-md-12 login-form">
                    <h1>Client Login</h1>
                    <div class="head">
                        <img src="/asset/img/user.png" alt="">
                    </div>
                    <form role="form" id="login_form" name="login_form" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="password" placeholder="Password" />
                        </div>
                        <div class="col-md-12 form-group login-remember">
                            <input type="button" class="form-control" value="LOGIN" id="login" />
                        </div>
                        <div class="col-md-12 form-group login-remember-me">
                            <input type="hidden" id="nrn" name="nrn"></input>
                            <input type="checkbox" id="nrn_status" name="nrn_status" /> Remember Me
                        </div>
                    </form>
                </div>
                <div class="col-md-12 login-footer">
                    <div class="col-md-5 login-forgot-password">
                        <a href="/signup/register" class="login-signup">Forgot your password?</a>
                    </div>
                    <div class="col-md-7 login-signup-new">
                        <span>
                        Don't have an account?
                        <a class="login-signup" href="/signup/register">Sign up</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>