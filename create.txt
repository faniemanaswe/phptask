<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $Item_nameError = null;
        $QauntityError = null;
        $CostError = null;
        $TotalError = null;
        
        // keep track post values
        $Item_name = $_POST['Item_name'];
        $Qauntity = $_POST['Qauntity'];
        $Cost = $_POST['Cost'];
        $Total = $_POST['Total'];
         
        // validate input
        $valid = true;
        if (empty($Item_name)) {
            $Item_nameError = 'Please enter item  Name';
            $valid = false;
        }
         
        if (empty($Qauntity)) {
            $QauntityError = 'Please enter Qauntity';
            $valid = false;
        
        }
         
        if (empty($Cost)) {
            $CostError = 'Please enter per cost';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Account (Item_name,Qauntity,Cost,Total) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($Item_name,$Qauntity,$Cost,$Total));
            Database::disconnect();
            header("Location: Task9.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Item</h3>
                    </div>

                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Item Name</label>
                        <div class="controls">
                            <input name="Item_name" type="text"  placeholder="Item Name" value="<?php echo !empty($Item_name)?$Item_name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($NumberError)?'error':'';?>">
                        <label class="control-label">Qauntity</label>
                        <div class="controls">
                            <input name="Qauntity" type="text" placeholder="Qauntity" value="<?php echo !empty($Qauntity)?$Qauntity:'';?>">
                            <?php if (!empty($QauntityError)): ?>
                                <span class="help-inline"><?php echo $QauntityError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($CostError)?'error':'';?>">
                        <label class="control-label">Cost</label>
                        <div class="controls">
                            <input name="Cost" type="text"  placeholder="cost" value="<?php echo !empty($Cost)?$Cost:'';?>">
                            <?php if (!empty($CostError)): ?>
                                <span class="help-inline"><?php echo $CostError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($TotalError)?'error':'';?>">
                        <label class="control-label">Total</label>
                        <div class="controls">
                            <input name="Total" type="text"  placeholder="Total" value="<?php echo !empty($Total)?$Cost:'';?>">
                            <?php if (!empty($TotalError)): ?>
                                <span class="help-inline"><?php echo $TotalError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="button-success pure-button">Create</button>
                          <a class="button-secondary pure-button" href="Task9.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>