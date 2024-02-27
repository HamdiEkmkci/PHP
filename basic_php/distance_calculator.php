<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Calculator</title>
</head>

<body>
    <form style="display:relative;" action="distance_calculator.php" method="POST">
        <label>Latitude A : </label><input style="margin-left:10px;" type="text" name="latitudeA"
            placeholder="Latitude of A"><br>
        <label>Longitude A :</label><input style="margin-left:10px;" type="text" name="longitudeA"
            placeholder="Longitude of A"><br>
        <label>Latitude B : </label><input style="margin-left:10px;" type="text" name="latitudeB"
            placeholder="Latitude of B"><br>
        <label>Longitude B :</label><input style="margin-left:10px;" type="text" name="longitudeB"
            placeholder="Longitude of B"><br>
        <input style="margin:10px 100px;width:140px;height:20px;" type="submit" value="Hesapla">
    </form>

    <p>
        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $placeA = [
                'latitude' => $_POST['latitudeA'],
                'longitude' => $_POST['longitudeA']
            ];

            $placeB = [
                'latitude' => $_POST['latitudeB'],
                'longitude' => $_POST['longitudeB']
            ];
            
            if (empty($_POST['latitudeA']) || empty($_POST['longitudeA']) || empty($_POST['latitudeB']) || empty($_POST['longitudeB'])) {
                echo "fill all of them";
            } else {
                echo calculateDistance($placeA, $placeB);
            }

        }else{
            echo "Distance : will written here";
        }

        ?>
    </p>

</body>

</html>



<?php
function calculateDistance(array $placeA, array $placeB, $humanreadable = true)
{


    $longitudeDiff = $placeA['longitude'] - $placeB['longitude'];

    $longitudeDiffInRad = deg2rad($longitudeDiff);

    $longitudeDiffInRadCosine = cos($longitudeDiffInRad);

    $latitudeAInRad = deg2rad($placeA['latitude']);
    $latitudeBInRad = deg2rad($placeB['latitude']);

    $latitudeAInRadSine = sin($latitudeAInRad);
    $latitudeAInRadCosine = cos($latitudeAInRad);
    $latitudeBInRadSine = sin($latitudeBInRad);
    $latitudeBInRadCosine = cos($latitudeBInRad);

    $dist = $latitudeAInRadSine * $latitudeBInRadSine + $latitudeBInRadCosine * $latitudeAInRadCosine * $longitudeDiffInRadCosine;
    $arcCosDistance = acos($dist);
    $radiusInKilometres = 6364.963;
    $distInKm = $arcCosDistance * $radiusInKilometres;

    if (!$humanreadable) {
        return "Distance : ".$dist;
    } else {
        return "Distance : ".$distInKm;
    }

}









