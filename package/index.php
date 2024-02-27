<?php

require_once "./Router.php";

// Router::handle("GET","/test","test.php");

// Router::handle("GET","/test",function(){
//     echo "Here is function area";
// });

// +++++++++++++++++++++++++++++++++++++++++++++++
function testMe(){
    echo "testMe function is not an anonymus function ";
}
Router::get("/test","testMe");
// +++++++++++++++++++++++++++++++++++++++++++++++

// Router::get("/test","test.php");