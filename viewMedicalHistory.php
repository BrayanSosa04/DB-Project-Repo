<form action = "patient.php">
    <p>Here is your medical history:</p>
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
        <th>Diagnosis Test</th>
        <th>Diagnosis Result</th>
        <th>Associated Physician</th>
        <th>Associated Specialist</th>
        <th>Appointment Date and Time</th>

        <?php 
            include_once 'connectToTheDB.php';

            $Patient_ID_VMH = $_GET['Patient_ID_VMH'];
            $sql = "SELECT MEDICAL_HISTORY.Diagnosis_Test, MEDICAL_HISTORY.Diagnosis_Results, 
                           MEDICAL_HISTORY.Asso_Physician, MEDICAL_HISTORY.Asso_Specialist, 
                           MEDICAL_HISTORY.Appointment_Time
                    FROM MEDICAL_HISTORY, PATIENTS
                    WHERE MEDICAL_HISTORY.Patient_ID = '$Patient_ID_VMH' AND PATIENTS.Patient_ID = '$Patient_ID_VMH' AND MEDICAL_HISTORY.Flagged_Delete = 0;";
            $result = mysqli_query ($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>" . $row['Diagnosis_Test'] . "</td><td>" . $row['Diagnosis_Results'] . "</td><td>" . 
                    $row['Asso_Physician'] . "</td><td>" . $row['Asso_Specialist'] . "</td><td>" . $row['Appointment_Time'] . "</td><td>";
                }
            }
            else {
                echo "Sorry, but it looks like you have no history with us";
            }
            
        ?>
    </table>
    <br></br>
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>
