<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>

    <style>
        li {
            list-style-type: none;
            display: relative;
            float: left;
        }
        li hr {
            width: 100px;
        }
    </style>
</head>

<body>

    <h1 style="color:red;text-align:center;font-size:40px;">Functions</h1>
    <hr>
    <div>
        <ol>
            <li>
                <p>Function-1:</p>
                <hr>
                <?php
                $names = array(
                    "1" => "hamdi",
                    "2"=> "ilyas",
                    "3"=> "tayyip",
                );

                function test($array)
                {
                    foreach ($array as $name) {
                        echo "<li>$name</li><br>";
                    }
                }
                test($names);
                ?>
            </li>
        </ol>
    </div>


</body>

</html>