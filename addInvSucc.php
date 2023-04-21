<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
    <?php
        include_once 'connectToTheDB.php';

        $Inv_ID = $_POST['Inv_ID'];
        $Inv_Name  = $_POST['Inv_Name'];
        $Inv_Off = $_POST['Inv_Off'];
        $Inv_Count  = $_POST['Inv_Count'];
        $Inv_TD = $_POST['Inv_TD'];

        $sql = "INSERT INTO inventory(Inventory_ID, Inventory_Name, Asso_Office, Inventory_Count, Date_Created, Last_Date_Modified, Flagged_Delete)
                VALUES('$Inv_ID', '$Inv_Name', '$Inv_Off', '$Inv_Count', '$Inv_TD', '$Inv_TD', 0);";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Item has been added successfully!";
        }
        else{
            echo "Sorry we can not add this Item";
        }
    ?>
</body>
<form action = "Doc.php">
    <button type = "submit" name = "submit">Return to Doctors page</button>
</form>