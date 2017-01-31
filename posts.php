<?php
$connection = @mysqli_connect('127.0.0.1', 'root', 'root') or die("Could not connect.");
//database will be named 'fb' and table will be named 'newsfeed'
$select_db = @mysqli_select_db($connection, 'fb') or die("Could not find database.");
$query = "SELECT * FROM newsfeed";
$execution = @mysqli_query($connection, $query);

if(!$execution){
	echo "Could not perform query.";
}
		
$data = $arr;
header('Content-Type: application/json');
echo json_encode($data);
?>
