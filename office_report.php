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
<table>Office Report:
  <tr>
    <th>Office ID</th>
    <th>Address</th>
    <th>Number of Departments</th>
    <th>Number of Specialists</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $OSVinput = $_GET['OSVinput'];
    $OSVinput2 = $_GET['OSVinput2'];
    $sql = "SELECT * 
            FROM office_info
            WHERE Number_Of_Departments >= '$OSVinput' AND Number_Of_Specialist >= '$OSVinput2';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    //If error, add $ infront of OSVinput and OSVinput2 in the WHERE clause of sql2. Other issues might arrise from AND and ';"

    if($resultCheck > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["OFFICE_ID"] . "</td><td>" . $row["ADDRESS"] . "</td><td>" . $row["Number_Of_Departments"] . "</td><td>" . $row["Number_Of_Specialist"] . "</td></tr>";
      }
    } else {
      echo "No office found";
    }
  ?>
</table>

<br></br>

<table>Available Departments:
  <tr>
    <th>Department Name</th>
    <th>Head Specialist</th>
    <th>Associated Office</th>
    <th>Date Created</th>
  </tr>
  <?php 
    include_once 'connectToTheDB.php';

    $sqlD = "SELECT d.Department_Name, d.Head_Specialist, d.Asso_Office, d.Date_Created
             FROM departments as d, offices as o
             WHERE d.Asso_Office = o.OFFICE_ID;";

    $resultD = mysqli_query($conn,  $sqlD);
    $resultDCheck = mysqli_num_rows($resultD);

    if($resultDCheck > 0){
      while($rD = mysqli_fetch_assoc($resultD)){
        echo "<tr><td>" . $rowD['Department_Name'] . "</td><td>" . $rowD['Head_Specialist'] . "</td><td>" . $rowD['Asso_Office'] . "</td><td>" . $rowD['Date_Created'] . "</td></tr>";
      }
    }
    else{
      echo "No Departments";
    }

  ?>
</table>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>