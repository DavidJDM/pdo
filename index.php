<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 2/11/19
 * Time: 1:40 PM
 */

require ('/home/dkovalev/config.php');

//Connect to DB
try {
    //Instantiate a database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo "Connected to database";
}
catch(PDOException $e) {
    echo $e->getMessage();
}

//Define the query
$sql = "INSERT INTO pets(type, name, color) VALUES (:type, :name, :color)";

//Prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$type = 'kangaroo';
$name = 'Joey';
$color = 'purple';
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);

//Execute
$statement->execute();