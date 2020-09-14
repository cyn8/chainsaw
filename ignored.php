<?php

$key = "rocketscience";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://secretsite.com/api/v1/login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "key=$key");

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);


?>