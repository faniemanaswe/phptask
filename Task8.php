<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
<?php
include("menu.inc");
echo "<br /><br />";

     //////////////////Task 8 ////////////////////////
     ?>
      	
    <h3>how the entities are related in terms of primary and foreign keys</h3>

    <p>The <b>Customers</b> table has a PK named <b>CustomerID</b> that is a FK in the <b>Orders</b> table.  <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
       The <b>Order</b> table has a PK named <b>OrderID</b> that is a FK in the <b>Order Details</b> table. <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
       The <b>Products</b> table has a PK named <b>ProductID</b> that is a FK in the <b>Order Details</b> table.  <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
       The <b>Suppliers</b> table has a PK named <b>supplierID</b> that is a FK in the <b>Products </b> table. <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
       The <b>Categories</b> table has a PK named <b>CategoryID</b>that is a FK in the <b>Products</b> table. <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
       The <b>shippers</b> table has a PK named <b>shipperID</b> that is a FK in the <b>Orders</b> table. <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
       The <b>Employees</b> table has a PK named <b>EmployeeID</b> that is FK in the  <b>Orders</b> table. <b>RELATIONSHIP:</b> one_to_many(1:M)<br>
      

<iframe src="Task8.txt" width="1200" height="400">
	Your browser does not support iframes.
</iframe>
</body>
</html>