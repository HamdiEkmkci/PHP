<?php

echo "Password hashing<br>";

/*
 |++++++++++++++++++++++++++++++++++++++++++
 |           Password hashing
 |++++++++++++++++++++++++++++++++++++++++++
*/

$user = "test@example.com";
$password = 123456789;
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);



echo $hashedPassword."<br>";


if(password_verify($password,$hashedPassword)){
    echo "Log in";
}else{
    echo "Password not correct";
}