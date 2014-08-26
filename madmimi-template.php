<?php 
	$username = "name@example.com"; 
	$api_key = "appkey value"; 
	$email = $_GET['email'];; 
	$listname = "Madmimi List Name"; 
	$ch = curl_init('https://madmimi.com/audience_lists/'.$listname.'/add'); 
	curl_setopt($ch, CURLOPT_POST, TRUE); 
	curl_setopt($ch, CURLOPT_POSTFIELDS,"username=".$username."&api_key=".$api_key."&email=".$email); 
	$response = curl_exec($ch); 
	echo "Added: ", $email;
?>
