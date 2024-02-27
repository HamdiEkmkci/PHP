<?php
$names = ["hamdi", "ilyas", "tayyip", "rabia"];
$name = $names[0]." ".$names[1]."";
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h1> NAMES </h1>
    <ul>
        <?php foreach ($names as $name): ?>
            <?php if ($name == 'hamdi' || $name == 'ilyas'): ?>
                <li>
                    <?php echo $name ?>
                </li>
            <?php endif ?>
        <?php endforeach ?>
        <!--DAYS -->
        <li>date('Y-m-d', strtotime('+2 days'))----
            <?php echo date('Y-m-d', strtotime('+2 days')) ?>
        </li>
        <li>date('d')----
            <?php echo date('d') ?>
        </li>
        <li>date('D')----
            <?php echo date('D') ?>
        </li>
        <li>date('j')----
            <?php echo date('j') ?>
        </li>
        <li>date('l')----
            <?php echo date('l') ?>
        </li>
        <li>date('H:i:s')----
            <?php echo date('H:i:s') ?>
        </li>
        <li>
            <?php $date = '2023-12-30';
            $today = date('Y-m-d');
            $diff = strtotime($today) - strtotime($date);
            $numOfDays = $diff / (24 * 60 * 60);
            echo $numOfDays;
            ?>
        </li>
        <h2>Folders
            <hr style="width:200px;position:absolute;left:30px;transformY:20%">
        </h2>
        <li><i style="color:red;">fopen</i> ('filename','mode')
            <hr style="width:200px;position:absolute;left:30px;transformY:20%">
        </li>
        <br>
        <li><i style="color:red;">fread</i>($file,variable)</li>
        <li><i style="color:red;">fwrite</i>($file,'example.text')</li>
        <li><i style="color:red;">fgets</i>($file)</li>
        <li><b></b>
            <?php $file = fopen('./example.txt', 'w');
            fwrite($file, 'hamdi' . PHP_EOL);
            fwrite($file, 'ekmekci' . PHP_EOL);
            fclose($file);
            $file = fopen('./example.txt', 'r');
            $line = fgets($file);
            while ($line != false) {
                echo $line;
                $line = fgets($file);
            }
            fclose($file);
            ?>
        </li>
        <li>fgetcsv($file,0,'','""'); ->-> filename,length,sperator,quotes</li>
        <li>fputcsv($file,['1','pinterest']) <-<- instead of fwrite</li>
                <br><br>
                <h2 style="color:red;">JSON AND XML
                    <hr style="width:200px;position:absolute;left:30px;transformY:20%">
                </h2>
    </ul>

    <div class="container" style="width:100%;height:auto;background-color:lightblue;">

        <ul>
            <li>Read JSON :<br>
                <?php
                $json = '{
                        "accounts":{
                            "twitter":"https://twitter.com",
                            "google":"https://google.com"
                        }

                    }';
                $array = json_decode($json, true);
                $accounts = $array['accounts'];
                foreach ($accounts as $account => $link) {
                    echo "account : $account -- link : $link" . PHP_EOL;
                }



                // $dom = new DOMDocument();
                // $dom->loadXML($xml);
                // $accs = $dom->getElementsByTagName('account');
                // foreach($accs as $accs_item) {
                //     $name = $account->getAttribute('type');
                //     $link = $accs_item->nodeValue;
                //     echo "the address of $name is $link" .PHP_EOL;
                // }
                // $accounts = new SimpleXMLElement($xml);
                // foreach($accounts as $account => $link) {
                //     $name = $account['type'];
                //     $link = $account;
                //     echo 'account:'. $name .'link:'. $link . PHP_EOL;
                // }
                ?>
            </li>
            <li>XML :
                <p>
                    $accounts = new SimpleXMLElement('<*?xml version="1.0" encoding="UTF-8" ?>
                        <*accounts><*/accounts>');
                </p>
                <p>
                    $accounts->addChild('account', 'https://google.com')->addAttribute('type', 'google');
                </p>
                <p>
                    $finalXML = $accounts->asXML();
                </p>
                <p>
                    echo $finalXML;
                </p>
                <p>
                    SimpleXMLElement :
                    <?php
                    $accounts = new SimpleXMLElement('<?xml version ="1.0" encoding="UTF-8" ?><accounts></accounts>');
                    $accounts->addChild('account', 'https://google.com')->addAttribute('type', 'google');
                    $finalXML = $accounts->asXML();
                    echo $finalXML;
                    ?>
                </p>
            </li>
        </ul>
    </div>

    <div style="background-color:lightgreen;">
        <h2>EXAMPLE: </h2>
        <?php
        $data = '{
            "Turkey": "90",
            "Germany": "123",
            "Spain": "4314",
            "French": "912410",
            "Russia": "912310",
            "Romania": "4333",    
            "Nepal": "901212"
        }';

        $query = 'Germany';

        $countries = json_decode($data,true);
        // foreach ($countries as $country => $phone) {
        //     if($country == $query){
        //         echo $phone;
        //     }
        // }
        $file = fopen('./countries_phone_codes.txt','w');
        fputcsv($file,['country','phone']);
        foreach ($countries as $country => $phone) {
            fputcsv($file,[$country,$phone]);
        }
        fclose($file);
        ?> 
        <p>
            INCLUDE:
        <?php include('include.php')?>
        </p>
        <p>
            REQUIRE: if an error exist stops the execution.
            <br>
            <?php require('include.php')?>
        </p>
        <p>
            require_once and include_once : not going to show again.because it shows above.
            <?php require_once('include.php')?>
        </p>

    </div>
    



</body>

</html>