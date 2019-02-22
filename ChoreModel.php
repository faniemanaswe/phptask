<?php
	
function connect()
{
	// DB connection info
	//////////////////// TASK (A)/////
$servername = "localhost";
$username = "1350120";
$password = "IAMKHOLO13";
$dbname = "1350120";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	return $conn;
}
function Status ($Chore_id)
{
	$conn = connect();
	$sql = "UPDATE Chores SET ChoreComplete = 1 WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $Chore_id);
	$stmt->execute();
}
function getAllChores()
{
	$conn = connect();
	$sql = "SELECT * FROM Chores";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}
function addChore($name, $category, $date, $Status)
{
	$conn = connect();
	$sql = "INSERT INTO Chores (name, category, date, ChoreComplete) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $category);
	$stmt->bindValue(3, $date);
	$stmt->bindValue(4, $Status);
	$stmt->execute();
}
function deleteChore($Chore_id)
{
	$conn = connect();
	$sql = "DELETE FROM Chores WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $Chore_id);
	$stmt->execute();
}
?>
