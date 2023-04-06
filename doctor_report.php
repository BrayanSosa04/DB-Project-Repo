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
    <th>Employee_ID</th>
    <th>Office</th>
    <th>Salary</th>
  </tr>
  <?php
    include_once 'connectToTheDB.php';

    $DSVinput = $_GET['DSVinput'];
    $sql2 = "SELECT *
            FROM physician_info_per_office
            WHERE Salary >= $DSVinput;";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);

    if($resultCheck2 > 0) {
      while($row2 = mysqli_fetch_assoc($result2)) {
        echo "<tr><td>" . $row2["Employee_ID"] . "</td><td>" . $row2["OFFICE_ID"] . "</td><td>" . $row2["Salary"] . "</td></tr>";
      }
    } else {
      echo "No doctors found";
    }
  ?>
</table>
<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>