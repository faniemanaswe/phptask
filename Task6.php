<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php 
include("menu.inc");
echo "<br /><br />";




 
/////////////Task6////////////////
class Ship{
	private $name; 
	private $year;
	
	public function __construct($Name, $Year){
		$this->year = $Year;
		$this->name = $Name;
	}
	
	// a method getName()
	public function getName(){
		return $this->name;
	}
	
	public function showOutput(){
		return "Ship Name: " . $this->getName() . "<br />"  . "Year: " . $this->year . "<br /><br />";
	}
	
}
 
class CruiseShip extends Ship{
	private $numberOfPassengers;
	
	public function __construct($Name, $Year, $NumOfPassengers){
		$this->numOfPassengers = $NumOfPassengers;
		// call the parent constructor to finish the initialization
		parent::__construct($Name, $Year);
	}
	
	// method
	public function showOutput(){
		return "Ship Name: " . $this->getName() . "<br />"  . "Number Of Passengers: " . $this->numOfPassengers . "<br /><br />";
	}
}
 
 
class CargoShip extends Ship{
	private $tonnage;
	
	public function __construct($Name, $Year, $Tonnage){
		$this->tonnage = $Tonnage;
		// call the parent constructor to finish the initialization
		parent::__construct($Name, $Year);
	}
	
	// method
	public function showOutput(){
		return "Ship Name: " . $this->getName() . "<br />"  . "Cargo Capacity: " . $this->tonnage . "<br /><br />";
	}
	
}
 
// creating an array
$shipShip = new Ship("Titanic", "1996");
$myCruise = new CruiseShip("ByGrace", "2020", "2512");
$myCargo = new CargoShip("Ngomusa", "2012", "N/A");
 
$ships = array($shipShip, $myCruise, $myCargo);
 
foreach($ships as $ship){

	echo $ship->showOutput() . "<br /><br />";
}
 
echo "<br /><br />";
 
?>
 
<iframe src="Task6.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>