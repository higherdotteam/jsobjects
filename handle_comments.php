<?php
echo $_POST["comment"];
/*$comment = $_POST["comment"];

$connection = @mysqli_connect('127.0.0.1', 'root', 'root', 'fb') or die("Could not connect.");
$query = "INSERT INTO comments (id, commenter_id, comment, newsfeed_id) VALUES ('0', '1', '" . $comment . "' , '1')";
$execution = @mysqli_query($connection, $query);

//getting data from sql
$second_query = "SELECT * FROM comments";
$comment_data = @mysqli_query($connection, $second_query);

//converts sql data to json
$conversion = array();
while($row = mysqli_fetch_assoc($comment_data)){
	$conversion[] = $row;
}

			
$data = $conversion;
header('Content-Type: application/json');
echo json_encode($data);
*/
?>