<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CariKYC - Admin</title>

	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/asset/css/font-awesome.css" />

    <script type="text/javascript" src="/asset/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/asset/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="/asset/css/style.css" />
    <link rel="stylesheet" href="/asset/css/admin/admin.css" />
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
                <div class="col-md-12">
                    <div class="col-md-6 page-button">
                        <button type="button" class="btn btn-primary" id="search_button">Search</button>
                        <button type="button" class="btn btn-success">New Users</button>
                        <button type="button" class="btn btn-info">Week</button>
                        <button type="button" class="btn btn-warning">Month</button>
                        <button type="button" class="btn btn-danger">Year</button>
                    </div>
                    <div class="col-md-6 page-navigation">
                        <?=$links?>
                    </div>
                </div>
                <div class="col-md-12 search-list">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <tr><th >No</th><th >NRN</th><th >First Name</th><th >Last Name</th><th >Sync</th></tr>
                            <?php
                            foreach ($clients as $client) {
                            ?>
                            <tr>
                                <td class="view-details" for="<?=$client->NRN?>" data-toggle="modal" data-target="#profileModal" data-whatever="<?=$client->NRN?>"><?=++$start?></td>
                                <td class="view-details" for="<?=$client->NRN?>" data-toggle="modal" data-target="#profileModal" data-whatever="<?=$client->NRN?>"><?=$client->NRN?></td>
                                <td class="view-details" for="<?=$client->NRN?>" data-toggle="modal" data-target="#profileModal" data-whatever="<?=$client->NRN?>"><?=$client->STR_FN1?></td>
                                <td class="view-details" for="<?=$client->NRN?>" data-toggle="modal" data-target="#profileModal" data-whatever="<?=$client->NRN?>"><?=$client->STR_LN?></td>
                                <td class="sync-secondary-databases" for="<?=$client->NRN?>"><label class="admin-sync-label"><i class='fa fa-share-alt' aria-hidden='true'></i></label></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="page-navigation">
                        <?=$links?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 id="profileModalLabel">Client Approved Acces to private Records</h2>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 approve-form approve-first">
                        <div class="row user-field">
                            <label class="label-text-label-first"><i class='fa fa-person-icon' aria-hidden='true'></i></label>
                            <div class="col-md-4 form-group">
                                <div class="label-text first-name" >First Name</div><label class="label-text-label first-name-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text middle-name" >Middle Name</div><label class="label-text-label middle-name-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text last-name" >Last Name</div><label class="label-text-label last-name-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                        </div>
                        <div class="row user-field-none-display">
                            <label class="label-text-label-first"><i class='fa fa-email-icon' aria-hidden='true'></i></label>
                            <div class="col-md-4 form-group">
                                <div class="label-text email" >Email</div><label class="label-text-label email-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="label-text-label-first"><i class='fa fa-mobile-icon' aria-hidden='true'></i></label>
                                <div class="label-text mobile" >Mobile</div><label class="label-text-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="label-text-label-first"><i class='fa fa-phone-icon' aria-hidden='true'></i></label>
                                <div class="label-text home" >Home</div><label class="label-text-label home-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                        </div>
                        <div class="row user-field-none-display"></div>
                        <div class="row user-field">
                            <label class="label-text-label-first"><i class='fa fa-baby-icon' aria-hidden='true'></i></label>
                            <div class="col-md-4 form-group row-profile-left">
                                <div class="label-text dob" >Date of Birth</div><label class="label-text-label dob-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text pob" >Place of Birth</div><label class="label-text-label pob-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group row-profile-right">
                                <div class="label-text nationality" >Nationality</div><label class="label-text-label nationality-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                        </div>
                        <div class="row user-field-none-display">
                            <label class="label-text-label-first"><i class='fa fa-card-icon' aria-hidden='true'></i></label>
                            <div class="col-md-4 form-group">
                                <div class="label-text nrn" >NRN</div><label class="label-text-label nrn-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="label-text-label-first"><i class='fa fa-police-icon' aria-hidden='true'></i></label>
                                <div class="label-text passportno" >Passport No</div><label class="label-text-label passportno-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="label-text-label-first"><i class='fa fa-license-icon' aria-hidden='true'></i></label>
                                <div class="label-text driverno" >Driver License No</div><label class="label-text-label driverno-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                        </div>
                        <div class="row user-field-none-display"></div>
                        <div class="row user-field">
                            <label class="label-text-label-first"><i class='fa fa-marker-icon' aria-hidden='true'></i></label>
                            <div class="col-md-4 form-group">
                                <div class="label-text paddress1" >Permanent Address</div><label class="label-text-label paddress1-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text paddress2" >Permanent Address</div><label class="label-text-label paddress2-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text paddress3" >Permanent Address</div><label class="label-text-label paddress3-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text postcode" >Post Code</div><label class="label-text-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text country" >Barbados</div><label class="label-text-label country-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text postaddress" >Postal Address</div><label class="label-text-label postaddress-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                        </div>
                        <div class="row user-field-none-display"></div>
                        <div class="row user-field-none-display">
                            <label class="label-text-label-first"><i class='fa fa-gender-icon' aria-hidden='true'></i></label>
                            <div class="col-md-4 form-group">
                                <div class="label-text gender" >Gender</div><label class="label-text-label gender-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text profesion" >Profesion</div><label class="label-text-label profesion-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="label-text employer" >Employer</div><label class="label-text-label employer-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 approve-form approve-second">
                        <div class="col-md-4 form-group">
                            <img src="/asset/img/passport.jpg"/><label class="label-text-label nrn-img-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-4 form-group">
                            <img src="/asset/img/passport.jpg"/><label class="label-text-label passport-img-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-4 form-group">
                            <img src="/asset/img/driver-license.jpg"/><label class="label-text-label driverno-img-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-2 form-group">
                            <div class="label-text valid-nrn-img" >Valid</div>
                        </div>
                        <div class="col-md-2 form-group valid-nrn-img-div">
                            <div class="label-text valid-nrn-img-date" ><?=date('d-m-Y')?></div><label class="label-text-label valid-nrn-img-date-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-2 form-group">
                            <div class="label-text valid-passport-img" >Valid</div>
                        </div>
                        <div class="col-md-2 form-group valid-nrn-img-div">
                            <div class="label-text valid-passport-img-date" ><?=date('d-m-Y')?></div><label class="label-text-label valid-passport-img-date-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="label-text valid-driverno-img" >Not Available</div><label class="label-text-label valid-driverno-img-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <label class="label-text-label-first"><i class='fa fa-electronic-icon' aria-hidden='true'></i></label>
                            <div class="label-text electricity-bill-date" ><?=date('d-m-Y')?></div><label class="label-text-label electricity-bill-label"><i class='fa fa-check' aria-hidden='true'></i></label><br>
                            <label class="label-text-label-first"><i class='fa fa-water-icon' aria-hidden='true'></i></label>
                            <div class="label-text telecom1-bill-date" ><?=date('d-m-Y')?></div><label class="label-text-label telecom1-bill-label"><i class='fa fa-check' aria-hidden='true'></i></label><br>
                            <label class="label-text-label-first"><i class='fa fa-telecom-icon' aria-hidden='true'></i></label>
                            <div class="label-text telecom2-bill-date" >Telecom Provider</div><label class="label-text-label telecom2-bill-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="button" class="form-control" id="electricity" value="Get Utility Bill" /><br>
                            <input type="button" class="form-control" id="telecom" value="Get Utility Bill" /><br>
                            <input type="button" class="form-control" id="telecom2" value="Get Utility Bill" />
                        </div>
                        <div class="col-md-4 form-group">
                            <br><img src="/asset/img/signature.png"/><label class="label-text-label signature-img-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                    </div>
                    <div class="col-md-12 approve-form approve-third">
                        <div class="col-md-8 form-group">
                            <div class="label-text public-nrn" >NRN</div><label class="label-text-label public-nrn-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="label-text land-registry" >Land Registry</div><label class="label-text-label land-registry-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-8 space-10"></div>
                        <div class="col-md-8 form-group">
                            <div class="label-text caipo" >Land Registry</div><label class="label-text-label caipo-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <div class="label-text telephone-directory" >Telephone Directory</div><label class="label-text-label telephone-directory-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
                        <div class="col-md-4 form-group">
                            <button type="button" class="btn btn-primary" id="sync_telephone_directory" >Sync Telephone Directory</button>
                            <button type="button" class="btn btn-primary" id="unsync_telephone_directory" >Unync Telephone Directory</button>
                        </div>
                        <div class="col-md-12 form-group sync-telephone-directory">
                            <div class="col-md-4 form-group"><input type="text" class="form-control" id="first_name" placeholder="First" value="" /></div>
                            <div class="col-md-4 form-group"><input type="text" class="form-control" id="middle_name" placeholder="Middle" value="" /></div>
                            <div class="col-md-4 form-group"><input type="text" class="form-control" id="last_name" placeholder="Last" value="" /></div>
                            <div class="col-md-8 form-group">
                                <div class="sync-telephone-data"></div>
                            </div>
                            <div class="col-md-4 form-group sync-telephone-directory-action">
                                <button type="button" class="btn btn-primary" id="establish_sec_db">Search</button>
                                <button type="button" class="btn btn-default" id="cancel_tele_sec_db">Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-8 form-group">
                            <h4>Additional Searches</h4>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" id="country" placeholder="Motalities Database" /><label class="label-text-label"><i class='fa fa-check' aria-hidden='true'></i></label>
                        </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--button type="button" class="btn btn-primary">Send message</button-->
                </div>
            </div>
        </div>
    </div>
</body>

</html>