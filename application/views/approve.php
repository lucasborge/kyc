<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$client = $clients[0];
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
    <script type="text/javascript" src="/asset/js/search.js"></script>
</head>

    <body>
    <div id="main" class="approve-page">
        <div class="container">
            <div class="row approve-container">
                <div class="col-md-12 approve-title">
                    <h2>Client Approved Access To Private Records</h2>
                    <h4>Client is 80% Verified and ID Documents are partially, 33% up to date</h4>
                </div>
                <div class="col-md-12 approve-form approve-first">
                    <form role="form">
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="first_name" placeholder="First" value="<?=$client->STR_FN1?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="middle_name" placeholder="Middle" value="<?=$client->STR_FN2?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last" value="<?=$client->STR_LN?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="email" placeholder="email" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="mobile" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="home" placeholder="home" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="birth" placeholder="Date of Birth" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="place" placeholder="Place of Birth" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="national" placeholder="Nationality" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="nrn" placeholder="NRN"  value="<?=$client->NRN?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="passno" placeholder="Passport No" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="driverno" placeholder="Driver License No" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Permanent Address" value="<?=$client->STR_FN1?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Permanent Address" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Permanent Address" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="post_code" placeholder="Post code" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="country" placeholder="Country" value="Barbados" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="postal_addr" placeholder="Postal Address" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            &nbsp;
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="profesion" placeholder="Profession" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="employer" placeholder="Employer" />
                        </div>
                    </form>
                </div>
                <div class="col-md-12 approve-form approve-second">
                    <form role="form">
                        <div class="col-md-4 form-group">
                            <img src="/asset/img/coffee.jpg"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <img src="/asset/img/baseball.png"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <img src="/asset/img/cat-eye.jpg"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="email" placeholder="Valid" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="Vaild" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="home" placeholder="Not Available" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="birth" placeholder="Electricity Bill" /><br>
                            <input type="text" class="form-control" id="birth" placeholder="Telecom Provider" /><br>
                            <input type="text" class="form-control" id="birth" placeholder="Telecom Provider" />
                        </div>
                        <div class="col-md-4 form-group">
                            &nbsp;
                        </div>
                        <div class="col-md-4 form-group">
                            <br><img src="/asset/img/cat-eye.jpg"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 approve-form approve-third">
                    <form role="form">
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="NRN" />
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" id="place" placeholder="Land Registry" />
                        </div>
                        <div class="col-md-8 space-10"></div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" id="passno" placeholder="CAIPO" />
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" id="per_addr" placeholder="Telephone Directory" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-8 form-group">
                            <h4>Additional Searches</h4>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" id="country" placeholder="Motalities Database" />
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 approve-prev-btn invisible">
                        <span class="glyphicon glyphicon-arrow-left"></span>
                    </div>
                    <div class="col-md-6 approve-next-btn">
                        <span class="glyphicon glyphicon-arrow-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>