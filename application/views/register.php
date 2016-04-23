<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap-theme.min.css" />
	<script type="text/javascript" scr="/asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" scr="/asset/js/jquery-2.1.1.min.js"></script>

	<link rel="stylesheet" href="/asset/css/style.css" />
</head>

<body>
    <div id="main" class="signup-page">
        <div class="container">
            <div class="row signup_info">
                <div class="col-md-12">
                    <div class="site-logo">
                        <a href="http://localhost/signup">
                            <img height="34" src="/asset/img/background.png" width="203">
                        </a>
                    </div>
                    <div class="login-button">
                        <a href="/user/login">Login</a>
                    </div>
                </div>
            </div>
            <div class="row signup-container">
                <div class="col-md-12 signup-title">
                    <h2>Sign up for your free KYC account</h2>
                    <h4>Use KYC and all its features for free, forever!</h4>
                </div>
                <div class="col-md-12 signup-form">
                    <form role="form">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="email" placeholder="Your email" />
                        </div>
                        <div class="col-md-6 form-group">
                            <select class="form-control" id="country">
                                <option>Barbados</option>
                                <option>Denmark</option>
                                <option>England</option>
                                <option>France</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="mobile_number" placeholder="Your mobile number" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="password" placeholder="Set your password" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="region_number" placeholder="National Region Number" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="checkbox" id="nrn" name="nrn" class="form-control" /><label>If you do not have a NRN</label>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="button" id="nrn" name="nrn" class="form-control" value="Create account" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>