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
            $sql = "SELECT medical_history.Diagnosis_Test, medical_history.Diagnosis_Results, 
                           physician.Employee_Name, specialist.Employee_Name, 
                           medical_history.Appointment_Time
                    FROM medical_history, patients, physician, specialist
                    WHERE medical_history.Patient_ID = '$Patient_ID_VMH' AND patients.Patient_ID = '$Patient_ID_VMH' AND medical_history.Flagged_Delete = 0 AND medical_history.Asso_Physician = physician.Employee_ID AND patients.Physician_ID = medical_history.Asso_Physician AND medical_history.Asso_Specialist = specialist.Employee_ID;";
            $result = mysqli_query ($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>" . $row['Diagnosis_Test'] . "</td><td>" . $row['Diagnosis_Results'] . "</td><td>" . 
                    $row['physician.Employee_Name'] . "</td><td>" . $row['specialist.Employee_Name'] . "</td><td>" . $row['Appointment_Time'] . "</td><td>";
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