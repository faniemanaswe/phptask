<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";
 
/////////////Task5///////////////
class Student{
	 
	 private $name;
	 private $birthyear;
	 
	 // constructor
	 public function __construct($Name, $Birthyear){
		 $this->name = $Name;
		 $this->birthyear = $Birthyear;
	 }
	 
	 public function getName(){
		 return $this->name;
	 }
	 
	 public function setName($value){
		 return $this->name = $value;
	 }
	 
	 public function getBirthYear(){
		 return $this->birthyear;
	 }
	 
	 public function setBirthYear($value){
		 return $this->birthyear = $value;
	 }
	 
	 
	 
	 
	 // method 
	 public function showOutput(){
		 
		 echo "Name : " . $this->name. " <br />" . "Birth Year: " . $this->getBirthYear() . "<br />";
		 
	 }
}
 
class HostelStudent extends Student{
	
	private $nameOfResidence;
	
	// method to get and set the new field 
	
	public function getNameOfResidence(){
		return $this->nameOfResidence;
	}
	
	public function setNameOfResidence($value){
		return $this->nameOfResidence = $value;
	}
	
	// constructor 
	public function __construct($Name, $Birthyear, $NameOfResidence){
		$this->nameOfResidence = $NameOfResidence;
		// call the parent constructor
		parent::__construct($Name, $Birthyear);
	}
	
	
	// method 
	 public function showOutput(){
		 
		 return "Name : " . $this->getName() . " <br />" . "Birth Year: " . $this->getBirthYear() . "<br />" . "Name of Residence: " . $this->getNameOfResidence(). "<br />";
		 
	 }
	
}
 
 
// creation of object 
$firstStudent = new Student("Kholofelo", "1999");
echo $firstStudent->showOutput();
 
echo "<br /><br />";
 
$secondStudent = new HostelStudent("Kholofelo", "1999", "Steve biko Res.");
echo $secondStudent->showOutput();
 
echo "<br /><br />";
 
?>
  <iframe src="Task5.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>


 