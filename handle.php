<?php
include "connect.php";

$query = "SELECT * FROM users WHERE text LIKE '%".$_GET['q']."%'";

$execute = mysqli_query($conn, $query);

$json = [];
while($row = mysqli_fetch_assoc($execute)){
	$json[] = ['id'=>$row['id'], 'text'=>$row['text']];
}

header('Content-Type: application/json');
echo json_encode($json);
?>