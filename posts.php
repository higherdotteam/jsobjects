<?php
$connection = @mysqli_connect('127.0.0.1', 'root', 'root', 'fb') or die("Could not connect.");
//database will be named 'fb' and table will be named 'newsfeed'
$query = "SELECT * FROM newsfeed";
$execution = @mysqli_query($connection, $query);

if(!$execution){
	echo "Could not perform query.";
}

//converts sql data to json
$conversion = array();
while($row = mysqli_fetch_assoc($execution)){
	$conversion[] = $row;
}

$data = $conversion;
header('Content-Type: application/json');
echo json_encode($data);
?>
