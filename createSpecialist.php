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
    
  </form>