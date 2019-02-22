<?php
	
include_once 'ChoreModel.php';
function getChores()
{
  $Chores = getAllChores();
  return $Chores;
}
?>
