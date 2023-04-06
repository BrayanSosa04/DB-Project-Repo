<form action = "CEO.php">
<style>
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
    <th>Address</th>
    <th>Number of Departments</th>
    <th>Number of Specialists</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $OSVinput = $_GET['OSVinput'];
    $sql = "SELECT * 
            FROM office_info
            WHERE Number_Of_Departments >= $OSVinput;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

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
<button type = "submit" name = "submit" >Return to the main page</button>
</form>