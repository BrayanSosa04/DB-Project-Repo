<form action = "office_create.php">
<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
  include_once 'connectToTheDB.php';

  $OSVCOffice_ID = $_POST['OSVCOffice_ID'];
  $OSVCAddress = $_POST['OSVCAddress'];
  $OSVCDate = $_POST['OSVCDate'];
  $OSVCBudget = $_POST['OSVCBudget'];

  $sql = "INSERT INTO offices(OFFICE_ID, `ADDRESS`, DATE_ESTABLISHED, BUDGET, Flagged_Delete)
  VALUES ('$OSVCOffice_ID', '$OSVCAddress', '$OSVCDate', $OSVCBudget, 0);";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo 'New Office Created!';
  }
  else {
    echo 'Office Creation Failed';
  }
?>
<button type = "submit" name = "submit">Return to CEO page</button>
</body>
<<<<<<< HEAD
</form>
=======
</form>
>>>>>>> ca5d93f73405b8f0dd21d2422adcb3159a9f5e33
