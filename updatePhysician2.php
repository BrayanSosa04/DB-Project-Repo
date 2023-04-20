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

  if(!empty($_POST['$SUpdateName'])){
    $SUpdateName = $_POST['$SUpdateName'];
  }
  else{
    $sqlname = "SELECT Employee_Name FROM physician WHERE Employee_ID = '$SUpdateID';";
    $SUpdateName = mysqli_query($conn, $sqlname);
  }
  
  $SUpdateOffice = $_POST['$Spe_Off'];
  $SUpdateDepartment = $_POST['$Spe_Dept'];
  $SUpdateSex = $_POST['$SUpdateSex'];

  if(!empty($_POST['$SUpdateEmail'])){
    $SUpdateEmail = $_POST['$SUpdateEmail'];
  }
  else{
    $sqlEm = "SELECT Employee_Email FROM physician WHERE Employee_ID = '$SUpdateID';";
    $SUpdateEmail = mysqli_query($conn, $sqlEm);
  }

  if(!empty($_POST['$SUpdatePhone'])){
    $SUpdatePhone = $_POST['$SUpdatePhone'];
  }
  else{
    $sqlpnum = "SELECT Employee_Phone FROM physician WHERE Employee_ID = '$SUpdateID';";
    $SUpdatePhone = mysqli_query($conn, $sqlpnum);
  }
  
  if(!empty($_POST['$SUpdateAvailable'])){
    $SUpdateAvailable = $_POST['$SUpdateAvailable'];
  }
  else{
    $sqla = "SELECT Available FROM physician WHERE Employee_ID = '$SUpdateID';";
    $SUpdateAvailable = mysqli_query($conn, $sqla);
  }
  
  if(!empty($_POST['$SUpdateSalary'])){
    $SUpdateSalary = $_POST['$SUpdateSalary'];
  }
  else{
    $sqlsal = "SELECT Salary FROM physician WHERE Employee_ID = '$SUpdateID';";
    $SUpdateSalary = mysqli_query($conn, $sqlsal);
  }
  
  $SUpdateLast_Modified = date('Y-m-d');
  $SUpdateModifiedBy = $_POST['$SUpdateModifiedBy'];

  $sql = "UPDATE physician
          SET Employee_Name = '$SUpdateName', Asso_Office = '$SUpdateOffice', Asso_Department = '$SUpdateDepartment', Sex = '$SUpdateSex', Employee_Email = '$SUpdateEmail', Employee_Phone = '$SUpdatePhone', Available = '$SUpdateAvailable', Salary = '$SUpdateSalary', Last_Date_Modified = '$SUpdateLast_Modified', Last_Modified_By = '$SUpdateModifiedBy'
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