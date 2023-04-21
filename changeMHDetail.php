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
<form action = "changeMHDetailSucc.php" method = "POST">

</form>

<table>
    <tr>
      <th>Patient ID</th>
      <th>Patient Name</th>
      <th>Diagnosis Test</th>
      <th>Diagnosis Result</th>
      <th>Date of the Appointment</th>
    </tr>

    <?php
        include_once 'connectToTheDB.php';

        $pat = $_POST['pat'];

        $sql = "SELECT m.Patient_ID, m.Patient_Name, m.Diagnosis_Test, m.Diagnosis_Results, m.Appointment_Time
                FROM medical_history as m
                WHERE m.Patient_ID = '$pat' AND m.Flagged_Delete = 0;";

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($r = mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $r['Patient_ID'] . "</td><td>" . $r['Patient_Name'] . "</td><td>" . $r['Diagnosis_Test'] . "</td><td>" . $r['Diagnosis_Results'] . "</td><td>" . $r['Appointment_Time'] . "</td></tr>";
            }
        }
        else{
            echo "Sorry this patient has no medical history";
        }
    ?>
</table>