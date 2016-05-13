<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CariKYC</title>

    <link rel="stylesheet" href="/asset/css/jquery-ui.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/asset/css/bootstrap-theme.min.css" />

    <script type="text/javascript" src="/asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/asset/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/asset/js/jquery.searchabledropdown.js"></script>
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
                            <input type="text" class="form-control" id="first_name" placeholder="First" value="<?=$client['firtname']?>"  data-toggle="tooltip" title="First Name"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="middle_name" placeholder="Middle" value="<?=$client['middlename']?>" data-toggle="tooltip" title="Middle Name"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last" value="<?=$client['lastname']?>"  data-toggle="tooltip" title="Last Name"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="email" placeholder="email" value="<?=$client['email']?>"  data-toggle="tooltip" title="Email"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="mobile" value="<?=$client['mobile']?>"  data-toggle="tooltip" title="Mobile Number"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="home" placeholder="home" value="<?=$client['home']?>"  data-toggle="tooltip" title="Home Number"/>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="birth" name="birth" placeholder="Date of Birth" value="<?=$client['dob']?>" data-toggle="tooltip" title="Date of Birth"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="place" placeholder="Place of Birth" value="<?=$client['pob']?>" data-toggle="tooltip" title="Place of Birth"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="national" placeholder="Nationality" value="<?=$client['nationality']?>" data-toggle="tooltip" title="Nationality"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="nrn" placeholder="NRN"  value="<?=$client['nrn']?>" data-toggle="tooltip" title="NRN"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="passno" placeholder="Passport No" value="<?=$client['passportno']?>" data-toggle="tooltip" title="Passport No"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="driverno" placeholder="Driver License No" value="<?=$client['driverno']?>" data-toggle="tooltip" title="Driver No"/>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr1" placeholder="Permanent Address1" value="<?=$client['add1']?>" data-toggle="tooltip" title="Permanent Address1"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr2" placeholder="Permanent Address2" value="<?=$client['add2']?>" data-toggle="tooltip" title="Permanent Address2"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="per_addr3" placeholder="Permanent Address3" value="<?=$client['add3']?>" data-toggle="tooltip" title="Permanent Address3"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="post_code" placeholder="Post Code" value="<?=$client['pcode']?>" data-toggle="tooltip" title="Post Code"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <select class="form-control" id="country" name="country">
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB" selected="">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, The Democratic Republic of The</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and Mcdonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and The Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and The South Sandwich Islands</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="postal_addr" placeholder="Postal Address" value="<?=$client['padd']?>" data-toggle="tooltip" title="Postal Address"/>
                        </div>
                        <div class="col-md-12 space-10"></div>
                        <div class="col-md-4 form-group">
                            &nbsp;
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="profesion" placeholder="Profession" value="<?=$client['profession']?>" data-toggle="tooltip" title="Profession"/>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="employer" placeholder="Employer" value="<?=$client['employer']?>" data-toggle="tooltip" title="Employer"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 approve-form approve-second">
                    <form role="form">
                        <div class="col-md-4 form-group">
                            <div id="nrn_image" class="signature-image">
                                <form role="form" method="post" id="nrn-image-form" enctype="multipart/form-data">
                                    <input type="file" class="signature-image-file" id="nrn_file" name="nrn_file">
                                    <?php
                                    if (is_file('./asset/upload/id/nrn' . $client['nrn'] . '.png') ||
                                        is_file('./asset/upload/id/nrn' . $client['nrn'] . '.jpg') ||
                                        is_file('./asset/upload/id/nrn' . $client['nrn'] . '.gif')) {
                                        $visible_style = "hidden";
                                    } else
                                        $visible_style = "";
                                    ?>
                                    <input type="button" id="nrn_image_upload" class="btn btn-success signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                                    <div class="nrn-preview">
                                    <?php
                                    if (is_file('./asset/upload/id/nrn' . $client['nrn'] . '.png')) {
                                        echo "<img src='/asset/upload/id/nrn" . $client['nrn'] . ".png' style='width:200px; height:90px;'/>";
                                    } else if (is_file('./asset/upload/id/nrn' . $client['nrn'] . '.jpg')) {
                                        echo "<img src='/asset/upload/id/nrn" . $client['nrn'] . ".jpg' style='width:200px; height:90px;'/>";
                                    } else if (is_file('./asset/upload/id/nrn' . $client['nrn'] . '.gif')) {
                                        echo "<img src='/asset/upload/id/nrn" . $client['nrn'] . ".gif' style='width:200px; height:90px;'/>";
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
                                if (is_file('./asset/upload/id/passport' . $client['nrn'] . '.png') ||
                                    is_file('./asset/upload/id/passport' . $client['nrn'] . '.jpg') ||
                                    is_file('./asset/upload/id/passport' . $client['nrn'] . '.gif')) {
                                    $visible_style = "hidden";
                                } else
                                    $visible_style = "";
                                ?>
                                <input type="button" id="passport_image_upload" class="btn btn-success signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                                <div class="passport-preview">
                                <?php
                                if (is_file('./asset/upload/id/passport' . $client['nrn'] . '.png')) {
                                    echo "<img src='/asset/upload/id/passport" . $client['nrn'] . ".png' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/passport' . $client['nrn'] . '.jpg')) {
                                    echo "<img src='/asset/upload/id/passport" . $client['nrn'] . ".jpg' style='width:200px; height:90px;'/>";
                                } else if (is_file('./asset/upload/id/passport' . $client['nrn'] . '.gif')) {
                                    echo "<img src='/asset/upload/id/passport" . $client['nrn'] . ".gif' style='width:200px; height:90px;'/>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <div id="driver_image" class="signature-image">
                                <input type="file" class="signature-image-file" id="driver_file" name="nrn_file">
                                <?php
                                if (is_file('./asset/upload/id/driver' . $client['nrn'] . '.png') ||
                                    is_file('./asset/upload/id/driver' . $client['nrn'] . '.jpg') ||
                                    is_file('./asset/upload/id/driver' . $client['nrn'] . '.gif')) {
                                    $visible_style = "hidden";
                                } else
                                    $visible_style = "";
                                ?>
                                <input type="button" id="driver_image_upload" class="btn btn-success signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                                <div class="driver-preview">
                                    <?php
                                    if (is_file('./asset/upload/id/driver' . $client['nrn'] . '.png')) {
                                        echo "<img src='/asset/upload/id/driver" . $client['nrn'] . ".png' style='width:200px; height:90px;'/>";
                                    } else if (is_file('./asset/upload/id/driver' . $client['nrn'] . '.jpg')) {
                                        echo "<img src='/asset/upload/id/driver" . $client['nrn'] . ".jpg' style='width:200px; height:90px;'/>";
                                    } else if (is_file('./asset/upload/id/driver' . $client['nrn'] . '.gif')) {
                                        echo "<img src='/asset/upload/id/driver" . $client['nrn'] . ".gif' style='width:200px; height:90px;'/>";
                                    }
                                    ?>
                                </div>
                            </div>
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
                            <input type="text" class="form-control" id="electricity" placeholder="Electricity Bill" /><br>
                            <input type="text" class="form-control" id="telecom" placeholder="Telecom Provider" /><br>
                            <input type="text" class="form-control" id="water" placeholder="Telecom Provider" />
                        </div>
                        <div class="col-md-4 form-group">
                            &nbsp;
                        </div>
                        <div class="col-md-4 form-group">
                            <div id="sign_image" class="signature-image">
                                <input type="file" class="signature-image-file" id="sign_file" name="nrn_file">
                                <?php
                                if (is_file('./asset/upload/id/sign' . $client['nrn'] . '.png') ||
                                    is_file('./asset/upload/id/sign' . $client['nrn'] . '.jpg') ||
                                    is_file('./asset/upload/id/sign' . $client['nrn'] . '.gif')) {
                                    $visible_style = "hidden";
                                } else
                                    $visible_style = "";
                                ?>
                                <input type="button" id="signature_image_upload" class="btn btn-primary signature-image-file-upload <?=$visible_style?>" value="Upload"></input>
                                <div class="signature-preview">
                                    <?php
                                    if (is_file('./asset/upload/id/sign' . $client['nrn'] . '.png')) {
                                        echo "<img src='/asset/upload/id/sign" . $client['nrn'] . ".png' style='width:200px; height:90px;'/>";
                                    } else if (is_file('./asset/upload/id/sign' . $client['nrn'] . '.jpg')) {
                                        echo "<img src='/asset/upload/id/sign" . $client['nrn'] . ".jpg' style='width:200px; height:90px;'/>";
                                    } else if (is_file('./asset/upload/id/sign' . $client['nrn'] . '.gif')) {
                                        echo "<img src='/asset/upload/id/sign" . $client['nrn'] . ".gif' style='width:200px; height:90px;'/>";
                                    }
                                    ?>
                                </div>
                            </div>
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