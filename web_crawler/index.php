<?php

$curl = curl_init();
$requestType = "GET";

curl_setopt_array($curl,[
    CURLOPT_URL => "https://www.imdb.com/chart/boxoffice/",
    CURLOPT_CUSTOMREQUEST => $requestType,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($curl);
curl_close($curl);


libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($response);
$xpath = new DOMXPath($dom);

$weekendTitleNode = $xpath->query('//*[@id="__next"]/main/div/div[3]/section/div/div[1]/div/div[2]/div');
$firstItem = $weekendTitleNode->item(0);
echo $firstItem->nodeValue.'<br>';


for($i = 1;$i <= 10;$i++){
    $movieTitleNode = $xpath->query('//*[@id="__next"]/main/div/div[3]/section/div/div[2]/div/ul/li['.$i.']/div[2]/div/div/div/a/h3');
    $Items = $movieTitleNode->item(0);
    echo $Items->nodeValue.'<br>';
}