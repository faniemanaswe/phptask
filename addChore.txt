<?php 

include_once 'ChoreModel.php';
$name = $_POST['ChoreName'];
$category = $_POST['ChoreCategory'];
$date = $_POST['ChoreDate'];
$Status = $_POST['ChoreComplete'];
addChore($name, $category, $date, $Status);
header('Location: Task11.php');

?>
