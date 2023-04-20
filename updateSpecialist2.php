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

  $SUpdateID = $_POST['SUpdateID'];
  $SUpdateOffice = $_POST['Spe_Off'];
  $SUpdateDepartment = $_POST['Spe_Dept'];
  $SUpdatePractice = $_POST['SUpdatePractice'];
  $SUpdateLast_Modified = date('Y-m-d');
  $SUpdateModifiedBy = $_POST['SUpdateModifiedBy'];

  $sql = "UPDATE specialist
          SET Asso_Office = '$SUpdateOffice', Asso_Department = '$SUpdateDepartment',Specialist_Practice = '$SUpdatePractice', Last_Date_Modified = '$SUpdateLast_Modified', Last_Modified_By = '$SUpdateModifiedBy'
          WHERE Employee_ID = '$SUpdateID';";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'Specialist Updated';
  } else {
    echo 'Specialist Update Failed';
  }
?>
<form action = "CEO.php">
  <button type = "submit" name = "submit">Return to CEO page</button>
</form>
</body>