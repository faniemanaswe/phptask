<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";
 
/////////////Task4/////////////////
 
class Dwelling{
	// properties 
	private $numberOfRooms;
	private $sizeOfPlot;
	
	// constructor 
	public function __construct(){
		$this->numberOfRooms = 2;
		$this->sizeOfPlot = 100;
	}
	
	// getter and setter d
	public function getNumberOfRooms(){
		return $this->numberOfRooms;
	}
	public function setNumberOfRooms($value){
		$this->numberOfRooms = $value;
	}
	
	public function getSizeOfPlot(){
		return $this->sizeOfPlot;
	}
	
	public function setSizeOfPlot($value){
		return $this->sizeOfPlot = $value;
	}
}
 
 
?>
 
<iframe src="Task4.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>