<html>
<?php include 'menu.inc';
session_start();
 
use PFBC\Form;
use PFBC\Element;
 include("PFBC/Form.php");
 include("createTable.php");

?>
<head>
	
	
</head>
<body>


	<h1>My ToDo list</h1>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "createTable.php";
	require_once "getChore.php";

	$Chores = getChores();
	if(!empty($Chores))
	{
		echo "<table border='1'>
				<tr>
					<th>Name</th>
					<th>Category</th>
					<th>Date</td>
					<th>Complete</th>
					<th>Mark Complete?</th>
					<th>Delete?</th>
				</tr>";
		foreach($Chores as $Chore)
		{
			echo 	"<tr>
						<td>".$Chore[1]."</td>
						<td>".$Chore[2]."</td>
						<td>".$Chore[3]."</td>";

			if($Chore[4] == 0)
			{
				echo "<td>No</td>";
				echo "<td><a href='markChorecomplete.php?id=".$Chore[0]."'>Mark complete</a></td>";
			}
			else
			{
				echo "<td>Yes</td>";
				echo "<td>N/A</td>";
			}
			echo "<td><a href='deleteChore.php?id=".$Chore[0]."'>Delete</a></td>";
			echo "</tr>";
		}

		echo "</table>";
	}
?>
	<hr/>
	<form action="addChore.php" method="post">
		<table border="1">
			<tr>
				<td>Chore Name: </td>
				<td><input name="ChoreName" type="text"/></td>
			</tr>
			<tr>
				<td>Chore Category: </td>
				<td><input name="ChoreCategory" type="text"/></td>
			</tr>
			<tr>
				<td>Chore Date (yyyy-mm-dd): </td>
				<td><input name="ChoreDate" type="text"/></td>
			</tr>
		</table>
		<input type="submit" value="Add Item"/>
	</form>
</body>
</html>
<p> Task 11 Code <p>
<iframe src="Task11.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
<p> ChoreModel Code <p>
<iframe src="ChoreModel.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
<p> getChore code <p>
<iframe src="getChore.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
<p> AddChore Code <p>
<iframe src="addChore.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
<p> Delete Code <p>
<iframe src="deleteChore.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
<p> MarkChorecomplete Code <p>
<iframe src="MarkChorecomplete.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
<p> createTable code <p>
<iframe src="createTable.txt" height="400" scrolling="yes" width="1200px">
<p>Your browser does not support iframes.</p></iframe>
