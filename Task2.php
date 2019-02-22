<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";
 
//func_num_args(); // get the number of arguments
//func_get_arg($index) // get the argument from the index
//func_get_args() // get all the argument
///////////////////Task2////////////////////////
function welcome(){
	echo "Welcome to the following " . func_num_args() . " members: " . "<br />";
	
	$count = func_num_args(); // 2 (2 names)
	for($a = 0; $a < $count; $a++){
		echo func_get_arg($a) . "<br />";
	}
}
// calling the function with 2 names 
welcome("Ben", "Sue");
 
echo "<br /><br />";
 
// calling the function with 5 names 
welcome("Ephraim", "Peter", "Alfred", "Isaac", "Jabu");
 
?>
 
 <iframe src="Task2.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>