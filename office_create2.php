<form action = "office_create.php">
<style>
  body {
    background-color: lightgray;
  }
</style>
<body>
<?php
  include_once 'connectToTheDB.php';

  $OSVCOffice_ID = $_GET['OSVCOffice_ID'];
  $OSVCAddress = $_GET['OSVCAddress'];
  $OSVCDate = $_GET['OSVCDate'];
  $OSVCBudget = $_GET['OSVCBudget'];

  $sql = "INSERT INTO offices(Office_ID, Address, Date_Established, Budget)
  VALUES ('$OSVCOffice_ID', '$OSVCAddress', '$OSVCDate', '$OSVCBudget');";
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
