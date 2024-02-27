<?php

session_start();

if(isset($_SESSION["testSession"])){

    echo $_SESSION['testSession'];
}else{
    echo 'session not setted';
}