<style>
    body {
      background-color: lightgray;
    }

    h1 {
      font-family: "Times New Roman";
      text-align: center;
      background-color: mediumseagreen;
      border: 4px solid green;
      border-style: double;
  }
</style>

<body>
  <h1>Add a Specialist</h1>
  <form action = "createSpecialistSucc.php">
    <label for = "Spec_ID">Specialist ID:</label>
    <input type = "text" id = "Spec_ID" Spec_ID = "Spec_ID" name = "Spec_ID" maxlength = "7">

    <label for = "Spec_Name">Specialist Name:</label>
    <input type = "text" id = "Spec_Name" Spec_Name = "Spec_Name" name = "Spec_Name" maxlength = "30">

    <label for = "Spec_Off">Specialist's Associated Office:</label>
    <select id = "Spec_Off" Spec_Off = "Spec_Off" name = "Spec_Off">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlOff = "SELECT * FROM offices;";
            $resultOff = mysqli_query($conn, $sqlOff);

            while($rOff = mysqli_fetch_array($resultOff)){

        ?>
        <option value = "<?php echo $rOff['OFFICE_ID'];?>"><?php echo $rOff['ADDRESS'];?></option>
        <?php
            }
        ?>
    </select>

    <br></br>

    <label for = "Spec_Dept">Specialist's Associated Department:</label>
    <select id = "Spec_Dept" Spec_Dept = "Spec_Dept" name = "Spec_Dept">
        <?php 
            include_once 'connectToTheDB.php';

            $sqlDept = "SELECT * FROM departments;";
            $resultDept = mysqli_query($conn, $sqlDept);

            while($rDept = mysqli_fetch_array($resultDept)){

        ?>
        <option value = "<?php echo $rDept['Department_Name'];?>"><?php echo $rDept['Department_Name'];?></option>
        <?php
            }
        ?>
    </select>

    <label for = "Spec_Sex">Sex: </label>
    <select id = "Spec_Sex" Spec_Sex = "Spec_Sex" name = "Spec_Sex">
        <option value = "M">Male</option>
        <option value = "F">Female</option>
        <option value = "O">Other</option>
    </select>

    <label for = "Spec_DOB">Date of Birth:</label>
    <input type = "date" id = "Spec_DOB" Spec_DOB = "Spec_DOB" name = "Spec_DOB">

    <label for = "Spec_Ava">Availability: </label>
    <input type = "text" id = "Spec_Ava" Spec_Ava = "Spec_Ava" name = "Spec_Ava" placeholder = "Mon-Fri 8:00 AM - 5:00 PM " maxlength = "1000">
    <br></br>

  </form>