<?php

/*
 |+++++++++++++++++++++++++++++
 |          CURL
 |+++++++++++++++++++++++++++++
*/

$curl = curl_init();
curl_setopt_array($curl,[
    CURLOPT_URL => "https://google.com",
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HEADER => [],
]);
$response = curl_exec($curl);
curl_close($curl);


echo $response;