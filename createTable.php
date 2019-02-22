<?php
$servername = "localhost";
$username = "1350120";
$password = "IAMKHOLO13";
$dbname = "1350120";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS Chores (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   ChoreName VARCHAR(30) NOT NULL,
   CHoreCategory VARCHAR(30) NOT NULL,
    Choredate date,
    ChoreComplete bit
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "Table item created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


