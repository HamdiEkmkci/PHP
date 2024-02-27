<?php
/*
 |----------------------------------------
 |              ARRAY FUNCTİONS
 |----------------------------------------
 */

/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_filter();
 |++++++++++++++++++++++++++++++++++++++++
 */

 // IT WORKS VALUE - KEY FORMAT

// $array = [
//     "english"=> "fluent",
//     "german"=> "basics",
//     "turkish"=> "good",
//     "french"=> "unknown",
//     "spanish"=> "basic"
// ];

// $filteredArray = array_filter($array,function($level){
//     return $level == 'good'; //if want to keep item
// }); //0 value of each item (default)

// array_filter_use_key

// $filteredArray = array_filter($array,function($language){
//     return $language == 'english'; //if want to keep item
// },ARRAY_FILTER_USE_KEY); //0 value of each item (default)

// print_r($filteredArray);


// array_filter_use_both

// $filteredArray = array_filter($array,function($level,$language){ // PARAMETRELERİ TERS ALIYOR
//     return $language == 'english' || $level == 'basic'; //if want to keep item
// },ARRAY_FILTER_USE_BOTH); //0 value of each item (default)

// print_r($filteredArray);

/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_merge();
 |++++++++++++++++++++++++++++++++++++++++
 */
// // two string array

// $array = ["Bmw","Audi","Mercedes"];
// $arrayB = ["Wolkswagen","Honda","Porche"];

// $mergedArray = array_merge($array, $arrayB);

// print_r($mergedArray);


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_map();
 |++++++++++++++++++++++++++++++++++++++++
 */

// function addHashtag($item){
//     return '#'.$item;
// }


// $arrayL = ["english","german","turkish"];
// // $hashtaggedArray = array_map('addHashtag',$arrayL);
// $hashtaggedArray = array_map(function($item){
//     return '#'.$item;
// },$arrayL);



// $newArray = [];
// foreach($arrayL as $item){
//     $newArray[] = '#'.$item;
// }

// print_r($newArray);
 


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_chunk();
 |++++++++++++++++++++++++++++++++++++++++
*/

//  SPLİT ARRAYS TO  ARRAY FOR HUGE ARRAYS 


// $array = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "turkish"=> "good"
// ];       

// $chunkedArray = array_chunk($array,2, true); // true/false for index

// print_r($chunkedArray);


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_search();
 |++++++++++++++++++++++++++++++++++++++++
*/

// find to key for a value


// $array = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "turkish"=> "good",
//     "spanish" => "good"
// ];   

// $key = array_search('good',$array);

// echo $key; // first good value's key returns


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_replace();
 |++++++++++++++++++++++++++++++++++++++++
*/


// $array = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "turkish"=> "good",
//     "spanish" => "good"
// ]; 

// $arrayUpdated = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "turkish"=> "intermediate",
//     "spanish" => "middle"
// ]; 

// $updatedArray = array_replace($array,$arrayUpdated);

// print_r($updatedArray);



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_sort();
 |++++++++++++++++++++++++++++++++++++++++
*/

/* 
1-sort by value or the key  -- sort()
2-order ascending -- 
3-keep the keys
*/

// $array = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "turkish"=> "good",
//     "spanish" => "good",
//     "chinese",
//     "indian",
//     "italian",
//     "abd"
// ]; 

// sort($array); //ascending
// print_r($array);
// rsort($array); // descending order
// print_r($array);
// ksort($array);
// print_r($array);
// krsort($array);
// print_r($array);
// arsort($array); // desencding based on values
// print_r($array);



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_unique();
 |++++++++++++++++++++++++++++++++++++++++
*/
// IT IS AVOID FROM DUPLİCATE

// array_unique($array,SORT_STRING) ->default flag
// array_unique($array,SORT_REGULAR) ->take if ton identically equal


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_combine();
 |++++++++++++++++++++++++++++++++++++++++
*/

// $keys = ["english","german","turkish"];
// $values = ["good","basic","fluently"];

// array_combine($keys, $values);// count of the two of one should be equal.



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_reduce();
 |++++++++++++++++++++++++++++++++++++++++
*/

// $array = [1,2,3,4,5];
// echo array_sum($array).PHP_EOL;

// $reducedArray = array_reduce($array,function($carry,$item){
//     $cary = $carry + $item;
//     return $cary;
// });

// var_dump($reducedArray);


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_flip();
 |++++++++++++++++++++++++++++++++++++++++
*/

// keys become value -- values become key

// $array = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "turkish"=> "good",
//     "spanish" => "good"
// ]; 

// $flippedArray = array_flip($array);
// print_r($flippedArray);
// //turkish will not print because everone should be unique.



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_diff();
 |++++++++++++++++++++++++++++++++++++++++
*/
//     !!!!! BASED ON VALUES !!!!!

// $arrayA = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "spanish" => "good",
//     "turkish"=> "professional",
//     "irland"=> "irish"
// ];

// $arrayB = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "spanish" => "good"
// ]; 

// $diffArray = array_diff($arrayA, $arrayB);

//          !!!!BASED ON KEYS!!!!
// $diffArray = array_def_key($arrayA, $arrayB);

//          !!! BASED ON KEY AND VALUE !!!
// $diffArray = array_def_assoc($arrayA, $arrayB);

// print_r($diffArray);


/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_intersect();
 |++++++++++++++++++++++++++++++++++++++++
*/

// $arrayA = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "spanish" => "good",
//     "turkish"=> "professional",
//     "irland"=> "irish"
// ];

// $arrayB = [
//     "english"=> "fluent",
//     "german"=> "basic",
//     "spanish" => "good"
// ];

// $intersectArray = array_intersect($arrayA, $arrayB);

// //         !!!!BASED ON KEYS!!!!
// $intersectArray = array_intersect_key($arrayA, $arrayB);

// //         !!! BASED ON KEY AND VALUE !!!
// $intersectArray = array_intersect_assoc($arrayA, $arrayB);

// print_r($diffArray);



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_change_key_case();
 |++++++++++++++++++++++++++++++++++++++++
*/

// $array = [
//     "English"=> "fluent",
//     "German"=> "basic",
//     "Turkish"=> "good",
//     "Spanish" => "good"
// ]; 

// $changedKeys = array_change_key_case($array,CASE_UPPER);

// print_r($changedKeys);



/*
 |++++++++++++++++++++++++++++++++++++++++
 |              array_change_key_keys();
 |++++++++++++++++++++++++++++++++++++++++
*/

//      ARRAY TO STRING 

// $array = ['hello','my','friend','!'];
// $sentence = implode(' ',$array);

// echo $sentence;

// $newArray = explode(' ',$sentence);

// print_r($newArray);