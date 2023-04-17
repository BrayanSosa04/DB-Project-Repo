<form action = "CEO.php">
<style>
    body {
      background-color: lightgray;
    }
    
    table, th, td {
    border: 2px solid rgb(2, 2, 2);
    table-layout: fixed;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    text-align: center;
    }
</style>
<table>
  <tr>
    <th>Office ID</th>
    <th>Office Expenditures</th>
    <th>Office Budget</th>
    <th>Revenue Difference</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $sql3 = "SELECT *
            FROM company_expenditures
            WHERE Office_Difference <= 0;";
    $result3 = mysqli_query($conn, $sql3);
    $resultCheck3 = mysqli_num_rows($result3);

    if($resultCheck3 > 0) {
      while($row3 = mysqli_fetch_assoc($result3)) {
        echo "<tr><td>" . $row3["OFFICE_ID"] . "</td><td>" . $row3["Office_Expenditures"] . "</td><td>" . $row3["Budget"] . "</td><td>" . $row3["Office_Difference"] . "</td></tr>";
      }
    } 
    else {
      echo "No office overbudget";
    }
  ?>
</table>
<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>