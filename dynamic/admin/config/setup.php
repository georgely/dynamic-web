<?php
// Setup File:

# Database connection here:

# Database connection here:
include('../config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');



#functions:
include('functions/data.php');
include('functions/template.php');

#Site Setup
$debug = data_setting_value($dbc, 'debug-status');

$site_title = 'LY 1.0';
$page_title = 'Home page';

if(isset($_GET['page'])) {
	
	$pageid = $_GET['page'];
	
} else {
	
	$pageid = 1;
}

#page setup:
$page = data_page($dbc, $pageid);
#user setup
$user = data_user($dbc, $_SESSION['username']);


?>