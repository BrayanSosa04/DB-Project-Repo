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

<table>Employee Salaries:
  <tr>
    <th>Employee Name</th>
    <th>Employee ID</th>
    <th>Employee Salary</th>
    <th>Associated Office</th>
  </tr>
  <?php 
    include_once 'connectToTheDB.php';
    $sql4 = "SELECT p.Employee_Name as emp_name, p.Employee_ID, p.Salary, p.Asso_Office as aso_off
            FROM physician as p, offices as o, company_expenditures as c
            WHERE p.Asso_Office = o.OFFICE_ID AND c.Office_Difference <= 0 AND c.OFFICE_ID = o.OFFICE_ID
            GROUP BY p.Asso_Office;";
    $result4 = mysqli_query($conn, $sql4);
    $resultcheck4 = mysqli_num_rows($result4);

    if($resultcheck4 > 0){
      while($row4 = mysqli_fetch_assoc($result4)){
        echo "<tr><td>" . $row4["emp_name"] . "</td><td>" . $row4["Employee_ID"] . "</td><td>" . $row4["Salary"] . "</td><td>" . $row4["aso_off"] . "</td></tr>";
      }
    }
    else{
      echo "Your mini patient table doesn't work";
    }
  ?>
</table>

<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>