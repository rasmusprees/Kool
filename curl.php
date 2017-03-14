<?php

include 'function.php'; //lisan saidile oma funktsiooni nupu
home();

function url($site) {  // copyin veebilehe enda urli alla
	$url = curl_init();
	curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($url, CURLOPT_URL, $site);
	$data = curl_exec($url);
	curl_close($url);
	return $data;
}

echo url('www.tptlive.ee'); //veebileht mida kopeerin

?>