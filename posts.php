<?php
$conversion = array(
				array(
					"image" => "https://s3.amazonaws.com/uifaces/faces/twitter/chadengle/128.jpg",
					"name" => "Jordan Smith",
					"text" => "In other news, China is about to beat us to Exascale computing, believed to be the order of processing power of the human brain at neural level",
					"comments" => array(
								"commenter_id" => "1",
								"comment" => "This is the first comment",
								"newsfeed_id" => "1",
							)
				),
				array(
					"image" => "https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg",
					"name" => "Jessica Smith",
					"text" => "Happy New Year Everyone! We just posted on our blog about our experience at CES.",
					"comments" => array(
								"commenter_id" => "2",
								"comment" => "This is the second comment",
								"newsfeed_id" => "2",
							)
				),
				array(
					"image" => "https://s3.amazonaws.com/uifaces/faces/twitter/zack415/128.jpg",
					"name" => "Garrett Smith",
					"text" => "I made a streaming music station for Asia but then it started playing Europe. Continental drift on an unforgivable scale. No",
					"comments" => array(
								"commenter_id" => "3",
								"comment" => "This is the third comment",
								"newsfeed_id" => "4",
							)
				),
			);

/*
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
*/

$data = $conversion;
header('Content-Type: application/json');
echo json_encode($data);
?>

