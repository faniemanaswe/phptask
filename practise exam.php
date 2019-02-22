<?php
// Question 1.1
function sum ($required, $default = '9')
{
  $result = $required + $default;
  echo "the result of the calc is " . $result;
    
}

echo sum(5) ;
echo "<br>";

// Question 2.1
function subtract ($first_number = 0, $second_number = 76)
{
  $result = $first_number - $second_number;
  echo "the result of the calc is " . $result;
    
}

echo subtract() ;
echo "<br>";


//Question 2.2

function dynamic_args() {
for($i = 0 ; $i < func_num_args(); $i++) {
echo "Argument $i = ".func_get_arg($i)."<br />";
}
}
 dynamic_args("a", "b");

 echo "<br>";

 function running_counter($first_number,$second_number){
   $counter = 0;
   $x = 0;
   for ($x = $first_number;$x <= $second_number;$x++)
   $counter = $counter + $x;
   return $counter;
   echo "djgdsjkgdsj" .$counter;

 }
echo running_counter(10,35);

function display_error($error) {
  echo '<p class + "error">'.$error . '</p>';
 
}
display_error('value out of range');


function compute($val1,$val2 = '')
{
  $amount = $val1 + ($val1 * $val2);
  echo "$amount";
}
compute(14);


function calc($price,$tax = '')
{
  $total = $price + ($price *$tax);
  echo "$total";
}
calc(12);

function addOne($num)
{
  $num += 5;
}
function addTwo(&$num)
{
  $num += 5;
}
$value = 10;
addOne($value);
echo "The one value is $value <br />";
addtwo($value);
echo "The one value is $value <br />";

$a = 10;
function show_a() {
  echo $a;
}
show_a();



function calcit($count){
  $count = func_num_args();
  $total = 0;
  for ($i = 0 ; $i < $count; $i++)
  $total += func_get_arg($i);
  return $total/$count;
}
echo calcit(4,5,6);

function b()
{
  echo "fee";
}
function a()
{
  b();
  echo "foo";
  b();
}
a();



class Counter {
  protected $counter;
  protected $maxixumvalue;

  public function __construct() {
    $this->counter = 0;
    $this->maximumvalue =100;
  }
  
  public function getcounter(){
    return $this->counter;
  }
  public function setcounter(){
    $this->counter++;
  }
     
  public function getmaximum(){
    return $this->maximum;
  }
  public function setmaximum($value){
   $this->maximum = $value;
}

}

$counter = new Counter;
$counter->setcounter(50);
print $counter->getcounter();




class Student{
	 
  private $name;
  private $birthyear;
  
  // constructor
  public function __construct($Name, $Birthyear){
    $this->name = $Name;
    $this->birthyear = $Birthyear;
  }

  
  // method 
  public function showOutput(){
    
    return "Name : " . $this->name . " <br />" . "Birth Year: " . $this->birthyear . "<br />";
    
  }
}
$firstStudent = new Student("Kholofelo", "1999");
echo $firstStudent->showOutput();

?>