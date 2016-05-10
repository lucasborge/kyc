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
    <script type="text/javascript" src="/asset/js/admin/search.js"></script>
</head>

<body>
    <div id="main" class="search-page">
        <div class="container">
            <div class="row search-container">
                <div class="col-md-12 approve-title">
                    <h2>Search for an Individual</h2>
                    <h4></h4>
                </div>
                <div class="col-md-12 search-form">
                    <form role="form" id="search_form" name="search_form" method="post">
                        <div class="col-md-12">
                            <div class="col-md-4 search-country-select">
                                <select id="country" name="country">
                                    <option selected>Barbados</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 space-20"></div>
                        <div class="col-md-12 search-form-item">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <span class="search-space">Or</span>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-12" >
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="nrn" name="nrn" placeholder="YYMMDD-NNNN" />
                            </div>
                        </div>
                        <div class="col-md-12 space-30"></div>
                        <div class="col-md-12">
                            <div class="col-md-12 form-group search-btn">
                                <input type="button" id="search_users" name="" class="form-control" value="Search Individuals" />
                            </div>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-12">
                            <span>By clicking this button, you agree to our <a>Terms of Service.</a></span>
                        </div>
                        <input type="hidden" id="start" name="start" value="0" />
                        <input type="hidden" id="current" name="current" value="1" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>