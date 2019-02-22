<?php
  
include_once 'ChoreModel.php';
$id = $_GET['id'];
deleteChore($id);
header('Location: Task11.php');
?>
