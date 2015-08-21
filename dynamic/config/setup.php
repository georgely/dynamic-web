<?php
// Setup File:

# Database connection here:

//$dbc = new mysqli();
$dbc = mysqli_connect('127.0.0.1', 'root', '', 'LYDB');
if (!$dbc) {
	die('Could not connect: ' . mysql_error());
}

#Constants:
DEFINE('D_TEMPLATE', 'template');


#functions:
include('functions/data.php');

$site_title = 'LY 1.0';
$page_title = 'Home page';

if(isset($_GET['page'])) {
	
	$pageid = $_GET['page'];
	
} else {
	
	$pageid = 1;
}

#page setup:
$page = data_page($dbc, $pageid);

?>