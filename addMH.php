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
  <h1>Add Medical History</h1>
  <form action = "addMHSucc.php" method = "POST">
    <label for = "Pat_ID">Patient ID:</label>
    <input type = "text" id = "Pat_ID" Pat_ID = "Pat_ID" name = "Inv_ID" maxlength = "10">

    <label for = "Pat_Name">Patient Name:</label>
    <input type = "text" id = "Pat_Name" Pat_Name = "Pat_Name" name = "Pat_Name" maxlength = "30">


    <label for = "Pat_Test">Diagnostic Test: </label>
    <input type = "text" id = "Pat_Test" Pat_Test = "Pat_Test" name = "Pat_Test">

    <label for = "Pat_Result">Diagnostic Result: </label>
    <input type = "text" id = "Pat_Result" Pat_Result = "Pat_Result" name = "Pat_Result">

    <label for = "Apt_Date">Appointment Date: </label>
    <input type = "date" id = "Apt_Date" Apt_Date = "Apt_Date" name = "Apt_Date">
    
    <label for = "Pat_TD">Today's Date:</label>
    <input type = "date" id = "Pat_TD" Pat_TD = "Pat_TD" name = "Pat_TD">
    <br></br>
    <button type = "submit" name = "submit" >Finish Adding Medical History</button>
    <button type = "submit" name = "submit_s" formaction="show_patients.php">Return to Patient History page</button>
  </form>
</body>