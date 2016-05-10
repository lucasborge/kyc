<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CariKYC-Signup</title>

	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap-theme.min.css" />
	<script type="text/javascript" src="/asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/asset/js/signup.js"></script>

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
                        <a href="/users">Login</a>
                    </div>
                </div>
            </div>
            <div class="row signup-container">
                <div class="col-md-12 signup-title">
                    <h2>Sign up for your free CariKYC account</h2>
                    <h4>Use CariKYC and all its features for free, forever!</h4>
                </div>
                <div class="col-md-12 signup-form">
                    <form role="form" id="register_form" method="post" novalidate="novalidate" action="/signup/setprofile">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="first_name" name="firstname" placeholder="First Name" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="last_name" name="lastname" placeholder="Last Name" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your email" />
                        </div>
                        <div class="col-md-6 form-group">
                            <select class="form-control" id="country" name="country">
                                <option>Barbados</option>
                                <option>Denmark</option>
                                <option>England</option>
                                <option>France</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="mobile_number" name="mobilenumber" placeholder="Your mobile number" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Set your password" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" id="region_number" name="region_number" placeholder="National Registration Number" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="checkbox" id="nrn" name="nrn" class="form-control" /> If you do not have a NRN
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="button" id="signup_btn" class="form-control" value="Create account" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>