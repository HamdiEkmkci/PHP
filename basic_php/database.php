<?php

$pdo = new PDO('mysql:host=localhost;dbname=php_course','root','');


// INSERT

// $count = $pdo->exec('INSERT INTO example (name) VALUES ("php")');
// $lastId = $pdo->lastInsertId();
// $pdo->beginTransaction();
// $pdo->exec('INSERT INTO example (name) VALUES ("second php")');
// $pdo->exec('INSERT INTO example (name) VALUES ("youtube")');
// $pdo->exec('INSERT INTO example (name) VALUES ("instagram")');
// $pdo->exec('INSERT INTO example (name) VALUES ("Linkedin")');
// //manuel insert
// $pdo->commit();
// echo "$count rows effected and the last inserted id $lastId";

// $name = "another Example";

// $stn = $pdo->prepare('INSERT INTO example (name) VALUES (?)');
// $stn->bindValue(1,$name);
// $stn->execute();


// UPDATE & DELETE

// $name = "hamdi updated";
// $id = 1;
// $stn = $pdo->prepare('UPDATE example SET name=? where id =?');
// $stn->bindValue(1,$name);
// $stn->bindValue(2,$id);
// $stn->execute();

// $stn = $pdo->prepare('DELETE FROM example where id =?');
// $stn->bindValue(1,$id);
// $stn->execute();


//  SELECT 

// $statement = $pdo->query('SELECT * FROM example');
// $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach ($rows as $row) {
//     echo $row['id'],"-",$row['name'] , '<br>';
// }
