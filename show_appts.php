<form action = "Doc.php">
<table>
  <tr>
      <th>Patient ID</th>
      <th>Patient Name</th>
      <th>Office</th>
      <th>Day</th>
      <th>Treatment</th>
    </tr>
  <?php
    include_once 'connectToTheDB.php';

    $AVinput = $_GET['AVinput'];
      $sql3 = "SELECT P.Patient_ID, P.Name, A.Office_Address, A.Appointment_Time, P.Diagnosis_Results
               FROM appointments AS A, patients AS P";
  $result3 = mysqli_query($conn, $sql3);
  $resultCheck3 = mysqli_num_rows($result3);

    if($resultCheck3 > 0) {
      while($row3 = mysqli_fetch_assoc($result3)) {
        echo "<tr><td>" . $row3["Patient_ID "] . "</td><td>" . $row3["Name"] . "</td></td>" . $row3["Office_Address"] . "</td></td>" . $row3["Appointment_Time"] . "</td></td" . $row2["Diagnosis_Results"] . "</td></tr>";
      }
    } else {
      echo "No Appointments found";
      }
  ?>
</table>
<br></br>
<button type = "submit" name = "submit" >Return to the main page</button>
</form>