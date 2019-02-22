<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";
 
///////////////Task3(a)////////////////////
function calcCost($numberOfGroup){
	// check the group number 
	
	if($numberOfGroup >= 2 && $numberOfGroup <= 6){
		
		echo "The total cost for the group of " . $numberOfGroup . " is " . "R" . $numberOfGroup * 150 . ".00"."<br>";
		
	}else if($numberOfGroup >= 7 && $numberOfGroup <= 15){
		echo "The total cost for the group of " . $numberOfGroup . " is " . "R" . $numberOfGroup * 100 . ".00"."<br>";
	}else if($numberOfGroup >= 16){
		echo "The total cost for the group of " . $numberOfGroup . " is " . "R" . $numberOfGroup * 80 . ".00"."<br>";
	}else{
		
		echo "Invalid group number";
	}
}
 
// call the function 
calcCost(6);
calcCost(12);
calcCost(17);
 
echo "<br /><br />";
 
///////////////Task3(b)////////////////////
// form
echo "<form action='Task3.php' method='post'>
		<input type='checkbox' name='color[]' value='red'/> Red<br>
		<input type='checkbox' name='color[]' value='blue'/> Blue<br>
		<input type='checkbox' name='color[]' value='yellow'/> Yellow<br>
		<input type='checkbox' name='color[]' value='green'/> Green<br><br>
		
		<input type='radio' name='option' value='yes'>Yes <input type='radio' name='option' value='no'>No <br><br> 
		
		<input type='submit' value='SUBMIT' name='submit' />
		
	</form>";
	
	// call the function
	useCheckBoxes();
 
	function useCheckBoxes(){
		
		if(isset($_POST["submit"])){
			
			// get the selected check boxes 
			if(!isset($_POST["color"])){
				echo "Please choose a color" . "<br />";
				return;
			}else{
				
				// get the data from the form using an array
				@$colors = $_POST['color']; // get the array
				@$color1 = $colors[0]; //red
				@$color2 = $colors[1]; // blue
				@$color3 = $colors[2]; // yellow
				@$color4 = $colors[3]; // green
				
				if(isset($_POST["color"])){
					$colors = $_POST['color'];
					foreach ($colors as $key => $value){
						echo $value . '<br/>';
					}
				}
					
				
				
			}
			
			
			
		}
		
		
	}
	
	// call the function 
	useRadioButtons();
	
	// function to process the radio buttons
	function useRadioButtons(){
		if(isset($_POST["submit"])){
			
			if(isset($_POST["option"])){
				$selected = $_POST["option"];
				echo "Option selected : " . $selected . "<br />";
				return;
			}else{
				echo "Please choose yes or no" . "<br />";
			}
			
		}
		
		
	}
 
	
echo "<br /><br />";
?>
 
<iframe src="Task3.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>