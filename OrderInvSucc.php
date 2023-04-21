<?php 
    include_once 'connectToTheDB.php';

    $Inventory_name = $_POST['Inv_name'];
    $Inventory_Count = $_POST['Inventory_Count'];
    $Inventory_CountN = $_POST['Inventroy_Count'-'Inv_Count'];
    $Modified_Date = date('Y-m-d');

    $sql = "UPDATE inventory
            SET inventory.Inventory_Count = '$Inventory_CountN', inventory.Last_Modified_Date = '$Modified_Date', inventory.Inventory_name = '$Inventory_name'
            WHERE inventory.Inventory_Count = '$Inventory_Count' AND inventory.Flagged_Delete = 0;";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "You order has been placed";
    }
    else{
        echo "Sorry it looks that we are not able to place your order at this time";
    }
?>
<form action = "Doc.php">
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>