<?php

function data_page($dbc, $id) {

	$query = "SELECT * FROM pages WHERE id = $id";
	$result = mysqli_query($dbc, $query);
	$data = mysqli_fetch_assoc($result);
	
	return $data;
}

?>
