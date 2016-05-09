<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$client = $client[0];
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CariKYC</title>

	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/asset/css/jquery-ui.css" />

    <script type="text/javascript" src="/asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/asset/js/jquery-ui.js"></script>

	<link rel="stylesheet" href="/asset/css/style.css" />
    <script type="text/javascript" src="/asset/js/profile.js"></script>
</head>

    <body>
    <div id="main" class="approve-page">
        <div class="container">
            <div class="row approve-container">
                <div class="col-md-12 approve-title">
                    <h2>Client Approved Acces to private Records</h2>
                    <h4>Client is 80% Verified and ID Documents are partially, 33% up to date</h4>
                </div>
                <div class="col-md-12 approve-form approve-first">
                    <form role="form" id="profile_form" name="profile_form" method="post" >
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First" value="<?=$client['FIRST_NAME']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle" value="<?=$client['MIDDLE_NAME']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last" value="<?=$client['LAST_NAME']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?=$client['EMAIL']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" value="<?=$client['MOBILE_NUMBER']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="home" name="home" placeholder="home" value="<?=$client['HOME_NUMBER']?>" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="birth" name="birth" placeholder="Date of Birth" value="<?=$client['DOB']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="place" name="place" placeholder="Place of Birth" value="<?=$client['POB']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="national" name="national" placeholder="Nationality" value="<?=$client['COUNTRY']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="nrn" name="nrn" placeholder="NRN"  value="<?=$client['NRN']?>" readonly />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="passno" name="passno" placeholder="Passport No" value="<?=$client['PASSPORTNO']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="driverno" name="driverno" placeholder="Driver License No" value="<?=$client['DRIVERNO']?>" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr1" name="per_addr1" placeholder="Permanent Address" value="<?=$client['ADDRESS1']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr2" name="per_addr2" placeholder="Permanent Address" value="<?=$client['ADDRESS2']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr3" name="per_addr3" placeholder="Permanent Address" value="<?=$client['ADDRESS3']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="post_code" name="post_code" placeholder="Post code" value="<?=$client['POST_CODE']?>" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="Babados" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="postal_addr" name="postal_addr" placeholder="Postal Address" value="<?=$client['POSTAL_ADDRESS']?>" />
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            &nbsp;
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Profesion" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="employer" name="employer" placeholder="Employer" />
                        </div>
                        <input type="hidden" id="id" name="id" value="<?=$client['id']?>"></input>
                    </form>
                </div>
                <div class="col-md-12 approve-form approve-second">
                    <div class="col-md-4 form-group">
                        <div id="nrn_image" class="signature-image">
                            <form role="form" method="post" id="nrn-image-form" enctype="multipart/form-data">
                                <input type="file" class="signature-image-file" id="nrn_file" name="nrn_file">
                                <?php
                                if (is_file('./asset/upload/id/nrn' . $client['NRN'] . '.png') ||
                                    is_file('./asset/upload/id/nrn' . $client['NRN'] . '.jpg') ||
                                    is_file('./asset/upload/id/nrn' . $client['NRN'] . '.gif')) {
                                    $visible_style = "hidden";
                                } else
                                    $visible_style = "";
                                ?>
                                <input type="button" id="nrn_image_upload" class="btn btn-success signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                                <div class="nrn-preview">
                                <?php
                                if (is_file('./asset/upload/id/nrn' . $client['NRN'] . '.png')) {
                                    echo "<img src='/asset/upload/id/nrn" . $client['NRN'] . ".png' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/nrn' . $client['NRN'] . '.jpg')) {
                                    echo "<img src='/asset/upload/id/nrn" . $client['NRN'] . ".jpg' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/nrn' . $client['NRN'] . '.gif')) {
                                    echo "<img src='/asset/upload/id/nrn" . $client['NRN'] . ".gif' style='width:200px; height:90px;'/>";
                                }
                                ?>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <div id="passport_image" class="signature-image">
                            <input type="file" class="signature-image-file" id="passport_file" name="nrn_file">
                            <?php
                            if (is_file('./asset/upload/id/passport' . $client['NRN'] . '.png') ||
                                is_file('./asset/upload/id/passport' . $client['NRN'] . '.jpg') ||
                                is_file('./asset/upload/id/passport' . $client['NRN'] . '.gif')) {
                                $visible_style = "hidden";
                            } else
                                $visible_style = "";
                            ?>
                            <input type="button" id="passport_image_upload" class="btn btn-success signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                            <div class="passport-preview">
                            <?php
                            if (is_file('./asset/upload/id/passport' . $client['NRN'] . '.png')) {
                                echo "<img src='/asset/upload/id/passport" . $client['NRN'] . ".png' style='width:200px; height:90px;'/>";
                            } else if (is_file('./asset/upload/id/passport' . $client['NRN'] . '.jpg')) {
                                echo "<img src='/asset/upload/id/passport" . $client['NRN'] . ".jpg' style='width:200px; height:90px;'/>";
                            } else if (is_file('./asset/upload/id/passport' . $client['NRN'] . '.gif')) {
                                echo "<img src='/asset/upload/id/passport" . $client['NRN'] . ".gif' style='width:200px; height:90px;'/>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <div id="driver_image" class="signature-image">
                            <input type="file" class="signature-image-file" id="driver_file" name="nrn_file">
                            <?php
                            if (is_file('./asset/upload/id/driver' . $client['NRN'] . '.png') ||
                                is_file('./asset/upload/id/driver' . $client['NRN'] . '.jpg') ||
                                is_file('./asset/upload/id/driver' . $client['NRN'] . '.gif')) {
                                $visible_style = "hidden";
                            } else
                                $visible_style = "";
                            ?>
                            <input type="button" id="driver_image_upload" class="btn btn-success signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                            <div class="driver-preview">
                                <?php
                                if (is_file('./asset/upload/id/driver' . $client['NRN'] . '.png')) {
                                    echo "<img src='/asset/upload/id/driver" . $client['NRN'] . ".png' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/driver' . $client['NRN'] . '.jpg')) {
                                    echo "<img src='/asset/upload/id/driver" . $client['NRN'] . ".jpg' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/driver' . $client['NRN'] . '.gif')) {
                                    echo "<img src='/asset/upload/id/driver" . $client['NRN'] . ".gif' style='width:200px; height:90px;'/>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" id="passport" placeholder="Valid" />
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
                        <div id="sign_image" class="signature-image">
                            <input type="file" class="signature-image-file" id="sign_file" name="nrn_file">
                            <?php
                            if (is_file('./asset/upload/id/sign' . $client['NRN'] . '.png') ||
                                is_file('./asset/upload/id/sign' . $client['NRN'] . '.jpg') ||
                                is_file('./asset/upload/id/sign' . $client['NRN'] . '.gif')) {
                                $visible_style = "hidden";
                            } else
                                $visible_style = "";
                            ?>
                            <input type="button" id="signature_image_upload" class="btn btn-primary signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                            <div class="signature-preview">
                                <?php
                                if (is_file('./asset/upload/id/sign' . $client['NRN'] . '.png')) {
                                    echo "<img src='/asset/upload/id/sign" . $client['NRN'] . ".png' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/sign' . $client['NRN'] . '.jpg')) {
                                    echo "<img src='/asset/upload/id/sign" . $client['NRN'] . ".jpg' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/sign' . $client['NRN'] . '.gif')) {
                                    echo "<img src='/asset/upload/id/sign" . $client['NRN'] . ".gif' style='width:200px; height:90px;'/>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
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
                <div class="col-md-12 approve-form approve-forth">
                    <h3>Welcome to your Library</h3>
                    <h4>Authorities granted and Access log</h4>
                    <form role="form">
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="NRN" />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="place" placeholder="Land Registry" />
                        </div>
                        <div class="col-md-2 form-group">
                            <button class="btn btn-primary btn-revoke" id="revoke" >Revoke</button>
                        </div>
                        <div class="col-md-8 space-10"></div>
                        <div class="col-md-8 form-group">
                            <table class="table">
                                <thead>
                                    <tr><th>Organisation</th><th>Date</th><th>Agent</th><th>Purpose</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td>CIBC Barbados</td>
                                        <td>04/07/2014</td>
                                        <td>A N Other</td>
                                        <td>Verify Client</td>
                                    </tr>
                                    <tr class="success">
                                        <td>CIBC Barbados</td>
                                        <td>04/07/2014</td>
                                        <td>A N Other</td>
                                        <td>Verify Client</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>CIBC Barbados</td>
                                        <td>04/07/2014</td>
                                        <td>A N Other</td>
                                        <td>Verify Client</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>CIBC Barbados</td>
                                        <td>04/07/2014</td>
                                        <td>A N Other</td>
                                        <td>Verify Client</td>
                                    </tr>
                                </tbody>
                            </table>
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