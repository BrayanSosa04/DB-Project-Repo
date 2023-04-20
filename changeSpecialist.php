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

    button {
      width: 33%;
      margin: auto;
      background-color: dodgerblue;
      color: darkblue;
    }

    section {
      display: none;
      border: 4px solid green;
      border-style: double;
      background-color: lightgoldenrodyellow;
      padding-bottom: 25px;
    }

    input[type=text]:focus {
      border: 3px solid #555;
    }

    input[type=number]:focus {
      border: 3px solid #555;
    }
  }
</style>

<body>
  <h1>Update Specialists</h1>
  <section id = "SUpdateOverview">
    <form action = "updatePhysician2.php" method = "POST">
      <label for = "SUpdateID">Employee ID:</label>
      <input type = "text" id = "SUpdateID" SUpdateID = "SUpdateID" name = "SUpdateID">

      <label for = "SUpdateName">Name:</label>
      <input type = "text" id = "SUpdateName" SUpdateName = "SUpdateName" name = "SUpdateName">

      <label for = "SUpdateOffice">Office:</label>
      <select id = "Spe_Off" Phy_Off = "Spe_Off" name = "Spe_Off">
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

      <label for = "SUpdateDept">Department:</label>
      <select id = "Spe_Dept" Phy_Dept = "Spe_Dept" name = "Spe_Dept">
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

      <label for = "SUpdateSex">Sex:</label>
      <select id = "SUpdateSex" SUpdateSex = "SUpdateSex" name = "SUpdateSex">
        <option value = "M">M</option>
        <option value = "F">F</option>
        <option value = "O">O</option>
      </select>

      <label for = "SUpdateAvailable">Availability:</label>
      <input type = "text" id = "SUpdateAvailable" SUpdateAvailable = "SUpdateAvailable" name = "SUpdateAvailable">

      <label for = "SUpdatePractice">Practice:</label>
      <input type = "text" id = "SUpdatePractice" SUpdatePractice = "SUpdatePractice" name = "SUpdatePractice">
      
      <label for = "SUpdateEmail">Email:</label>
      <input type = "text" id = "SUpdateEmail" SUpdateEmail = "SUpdateEmail" name = "SUpdateEmail">

      <label for = "SUpdatePhone">Phone #:</label>
      <input type = "text" id = "SUpdatePhone" SUpdatePhone = "SUpdatePhone" name = "SUpdatePhone">

      <label for = "SUpdateYearsInDept">Years In Department:</label>
      <input type = "number" id = "SUpdateYearsInDept" SUpdateYearsInDept = "SUpdateYearsInDept" name = "SUpdateYearsInDept">

      <label for = "SUpdateYearsHD">Years As Head of Department:</label>
      <input type = "number" id = "SUpdateYearsHD" SUpdateYearsHD = "SUpdateYearsHD" name = "SUpdateYearsHD">

      <label for = "SUpdateSupervisor">Supervisor ID:</label>
      <input type = "text" id = "SUpdateSupervisor" SUpdateSupervisor = "SUpdateSupervisor" name = "SUpdateSupervisor">

      <label for = "SUpdateModifiedBy">Your Employee ID:</label>
      <input type = "text" id = "SUpdateModifiedBy" SUpdateModifiedBy = "SUpdateModifiedBy" name = "SUpdateModifiedBy">
  </section>
</body>