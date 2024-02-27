<?php

// exec("python ./sayHello.py",$output,$resultCode);
// var_dump($output);


$command = escapeshellcmd("python ./sayHello.py");
exec($command,$output,$resultCode);
var_dump($output);