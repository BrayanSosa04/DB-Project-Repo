<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
    <?php
        include_once 'connectToTheDB.php';

        $Pat_ID = $_POST['Pat_ID'];
        $Pat_Name  = $_POST['Pat_Name'];
        $Pat_test = $_POST['Pat_Test'];
        $Pat_Result  = $_POST['Pat_Result'];
        $Apt_Date = $_POST['Apt_Date'];
        $Pat_TD = $_POST['Pat_TD'];

        $sql = "INSERT INTO medical_history(Patient_ID, Patient_Name, Diagnosis_Test, Diagnosis_Results, Last_Modified_Date, Date_Created, Flagged_Delete)
                VALUES('Pat_ID', 'Pat_Name', 'Pat_Test', 'Pat_Result', 'Apt_Date', 'Pat_TD', 0);";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Medical History has been added successfully!";
        }
        else{
            echo "Sorry we can not add this Medical History";
        }
    ?>
</body>
<form action = "show_patients.php">
    <button type = "submit" name = "submit">Return to Patient History page</button>
</form>