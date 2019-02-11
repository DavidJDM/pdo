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