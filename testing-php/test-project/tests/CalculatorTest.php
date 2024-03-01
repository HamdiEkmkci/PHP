<?php

require("./Calculator.php");

it("can add two numbers",function(){
    $calculator = new Calculator();
    $total = $calculator->add(2,2);
    expect($total)->toBe(4);
});

it("can add multiple numbers",function(){
    $calculator = new Calculator();
    $total = $calculator->add(2,2,2,4);
    expect($total)->toBe(10);
});

it("throws an error when the value is not numeric",function(){
    $calculator = new Calculator();
    $total = $calculator->add(2,"example",2,4);
})->throws("All te numbers must be numeric");