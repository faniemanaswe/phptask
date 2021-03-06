<!DOCTYPE html>
<html lang="en">
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 55%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
 
<body>
<?php
include("menu.inc");
echo "<br /><br />";
 
/////////////Task9///////////////
class Account{
	 
	 private $name;
     private $number;
     private $cost;
	 
	 // constructor
	 public function __construct($number, $name ,$cost){
		 $this->name = $name;
         $this->number = $number;
         $this->cost = $cost;
	 }
	
	 public function getName(){
		 return $this->name;
	 }
	 
	 public function setName($value){
		 return $this->name = $value;
	 }
	 
	 public function getNumber(){
		 return $this->number;
	 }
	 
	 public function setNumber($value){
		 return $this->number = $value;
     }
     
     public function getCost(){
        return $this->cost;
    }
    
    public function setCost($value){
        return $this->cost = $value;
    }

	 // method 
	 public function showOutput(){
		 
		 return "Item : " . $this->getNumber() . "&nbsp " . $this->getName() . "&nbsp" . " @ " ." R" .$this->getCost(). "&nbsp;&nbsp;&nbsp;&nbsp  ". "R 1000.00" ; 
	 }
}

$Accounts = new Account(20,"Umbrellas",50);
echo $Accounts->showOutput();
 
echo "<br /><br />";

?>
    <div class="container">
            <div class="row">
                <h3>Alibaba stores</h3>
            </div>
            <div class="row">
            <p>
               <a href="create.php" class="btn btn-success">Create</a>
            </p>

            <table id="customers">
                  <thead>
                    <tr>
                      <th>Item Name</th>
                      <th>Qauntity</th>
                      <th>Cost Price</th>
                      <th>Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM Account ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['Item_name'] . '</td>';
                            echo '<td>'. $row['Qauntity'] . '</td>';
                            echo '<td>'. $row['Cost'] . '</td>';
                            echo '<td>'. $row['Total'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
    <p> Task 9 Code <p>
    <iframe src="Task9.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
<p> Create Code <p>
<iframe src="create.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
<p> Database Code <p>
<iframe src="database.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
<p> Delete Code <p>
<iframe src="deleteD.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
<p> Update Code <p>
<iframe src="update.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>


  </body>
</html>