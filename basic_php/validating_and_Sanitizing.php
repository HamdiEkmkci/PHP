<?php

/*
 |++++++++++++++++++++++++++++++++++++++++++
 |                Validation
 |++++++++++++++++++++++++++++++++++++++++++
*/

// preg_match($pattern,$match)


// FİLTERS

// $variable = 'test@example.com';
// if(!filter_var($variable, FILTER_VALIDATE_EMAIL)){
//     echo 'email is not valid';
// }else{
//     echo 'email is valid.';
// }

// $variable1 = 'https://example.com';
// if(!filter_var($variable1, FILTER_VALIDATE_URL)){
//     echo 'url is not valid';
// }else{
//     echo 'url is valid.';
// }



/*
 |++++++++++++++++++++++++++++++++++++++++++
 |           <3   Sanitizing  <3
 |++++++++++++++++++++++++++++++++++++++++++
*/

// $variable2 = '<p>"Hello variable2"</p>';
// $variable3 = '<p>email@example.com';
// $flag = FILTER_SANITIZE_STRING;
// $flag1 = FILTER_SANITIZE_EMAIL;
// $flag2 = FILTER_SANITIZE_URL;
// $sanitizedData = filter_var($variable3, $flag1);




// if($_SERVER ['REQUEST_METHOD'] == 'POST'){
//     $sanitizedData2 = filter_var($_POST['var'], $flag);
//     echo $sanitizedData2;
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Validating_and_Sanitizing.php" method="POST">
        <input type="text" name="var">
        <input type="submit">
    </form>
</body>

</html> -->