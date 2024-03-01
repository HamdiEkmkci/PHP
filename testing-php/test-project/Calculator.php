<?php

class Calculator{
    public function add(...$numbers){
        $total = 0;
        foreach($numbers as $number){
            if(is_numeric($number)){
            $total += $number;
            }else{
                throw new Exception("All te numbers must be numeric");
            }
        }
        return $total;
    }
}