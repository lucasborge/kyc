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
    <script type="text/javascript" src="/asset/js/search.js"></script>
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
                    <div class="page-navigation">
                        <?=$links?>
                    </div>
                </div>
                <div class="col-md-12 search-list">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <tr><th >No</th><th >NRN</th><th >First Name</th><th >Last Name</th></tr>
                            <?php
                            foreach ($clients as $client) {
                            ?>
                            <tr class="view-details" for="<?=$client->NRN?>">
                                <td><?=++$start?></td>
                                <td><?=$client->NRN?></td>
                                <td><?=$client->STR_FN1?></td>
                                <td><?=$client->STR_LN?></td>
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
</body>

</html>