<?php

require_once 'Router.php';


// echo "init.php<br>";


// Router::get('/test',function(){
//     echo 'I am here function';
// });

Router::get("/test","TestController","show");







