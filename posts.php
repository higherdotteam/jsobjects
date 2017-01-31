<?php

$arr = array(
			array(
				"image" => "https://s3.amazonaws.com/uifaces/faces/twitter/chadengle/128.jpg",
				"name" => "Jordan Smith",
				"text" => "In other news, China is about to beat us to Exascale computing, believed to be the order of processing power of the human brain at neural level.",
			),
			array(
				"image" => "https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg",
				"name" => "Jessica Smith",
				"text" => "Happy New Year Everyone! We just posted on our blog about our experience at CES.",
			),
			array(
				"image" => "https://s3.amazonaws.com/uifaces/faces/twitter/zack415/128.jpg",
				"name" => "Garrett Smith",
				"text" => "I made a streaming music station for Asia but then it started playing Europe. Continental drift on an unforgivable scale. No.",
			)
		);

$data = $arr;
header('Content-Type: application/json');
echo json_encode($data);
?>