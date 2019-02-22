<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";
 
/////////////Task1/////////////////////
function calculateTax($salary, $tax = 14){
	$salary = $salary + $tax;
	return $salary;
}
 
// call the function 
echo calculateTax(200) . "<br />";
echo calculateTax(100, 18) . "<br />";

?>
 
 <iframe src="Task1.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>