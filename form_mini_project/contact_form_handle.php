<?php


$redirect = false;

if(empty($_POST["name"]) || empty($_POST["message"]) || empty($_POST["email"])) {
    $redirect = true;
}

if($redirect) {
    header("Location: contact_form_ex.php?submitted=false");
    exit();
}


$fileName = "./contacts.json";
if(!file_exists($fileName)) {
    $file = fopen($fileName,"w");
    fclose($file);
}

$file = fopen($fileName,'r');
$jsonText = '';

$line = fgets($file);
while($line != false) {
    $jsonText = $jsonText.$line;
    $line = fgets($file);
}
fclose($file);

if(empty($jsonText)) {
    $contacts = [];
}else{
    $contacts = json_decode($jsonText, true);
}

$contacts[] = [
    'name' => $_POST['name'],
    'email'=> $_POST['email'],
    'message'=> $_POST['message'],
    'time' => date('Y-m-d H:i:s')
];

$jsonContacts = json_encode($contacts);

$file = fopen('./'.$fileName,'w');
fwrite($file, $jsonContacts);
fclose($file); 