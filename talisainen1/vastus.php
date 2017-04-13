<?php

$text = $_POST['text'];


if(isset($_POST['select'])){
	$option = $_POST['select'];
	switch ($option) {
		case 'bigger':
			echo (strtoupper($text));
			break;
		case 'smaller':
			echo (strtolower($text));
			break;
		case 'firstbig':
			$juppideks = explode(" ", $text);
			function fb($text)
			{
				return(ucfirst(strtolower($text)));
			}
			$firstB = array_map("fb", $juppideks);
			echo implode(" ", $firstB);
			break;
	}
}
echo "<br>";



//------tühikutest vaja lahti saada------
$cleanStr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $text)));

$words = explode(" ", $cleanStr); //jagab arrayks mu inputi
echo sizeof($words); // array suurus koos üleliigsete tühikutega

include_once 'string.html';
?>