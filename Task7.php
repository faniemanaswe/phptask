
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";

////////Task 7a //////
//validates the given url using preg_match which which matches given url with pattern 
$url = "https://www.unisa.ac.za/sites/myunisa/default/";
$pattern = '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i';
if (preg_match($pattern, $url))
echo "The URL is OK.";
else
echo "Wrong URL.";

echo "<Br>";

$url = "://www.unisa.ac.za/sites/myunisa/default/";
$pattern = '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i';
if (preg_match($pattern, $url))
echo "The URL is OK.";
else
echo "Wrong URL.";


echo "<Br>";

/////7b/////
////this here maches the alpha numaric characters
$charac1 = 'A1357';
$pattern = '/^[a-zA-Z0-9]+$/i';
if (preg_match($pattern, $charac1))
echo "The alphanumeric is OK.";
else
echo "Wrong alphanumeric";

echo "<br>";

$charac2 = '#5678';
$pattern = '/^[a-zA-Z0-9]+$/i';
if (preg_match($pattern,$charac2))
echo "The alphanumeric is OK.";
else
echo "Wrong alphanumeric";

echo "<br>";

$charac3 = "123456";
$pattern = '/^[a-zA-Z0-9]+$/i';
if (preg_match($pattern, $charac3))
echo "The alphanumeric is OK.";
else
echo "Wrong alphanumeric";
?>
<iframe src="Task7.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>