<style>
  body {
    background-color: lightgray;
  }

  button {
    width: 33%;
    margin: auto;
    background-color: dodgerblue;
    color: darkblue;
  }
</style>
<body>
<?php
  include_once 'connectToTheDB.php';

  $SUpdateID = $_POST['$SUpdateID'];
  $SUpdateName = $_POST['$SUpdateName'];
  $SUpdateOffice = $_POST['$Spe_Off'];
  $SUpdateDepartment = $_POST['$Spe_Dept'];
  $SUpdateSex = $_POST['$SUpdateSex'];
  $SUpdateEmail = $_POST['$SUpdateEmail'];
  $SUpdatePhone = $_POST['$SUpdatePhone'];
  $SUpdateAvailable = $_POST['$SUpdateAvailable'];
  $SUpdateSalary = $_POST['$SUpdateSalary'];
  $SUpdateLast_Modified = date('Y-m-d');
  $SUpdateModifiedBy = $_POST['$SUpdateModifiedBy'];

  $sql = "UPDATE physician
          SET EMPLOYEE_NAME = '$SUpdateName', ASSO_OFFICE = '$SUpdateOffice', ASSO_DEPARTMENT = '$SUpdateDepartment', SEX = '$SUpdateSex', EMPLOYEE_EMAIL = '$SUpdateEmail', EMPLOYEE_PHONE = '$SUpdatePhone', AVAILABLE = '$SUpdateAvailable', SALARY = '$SUpdateSalary', LAST_DATE_MODIFIED = '$SUpdateLast_Modified', LAST_MODIFED_BY = '$SUpdateModifiedBy'
          WHERE EMPLOYEE_ID = '$SUpdateID';";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'Physician Updated';
  } else {
    echo 'Physician Update Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>