<!DOCTYPE html>
<html>

<head>
  <!--This connects the HTML code to CSS code-->
  <style>
html {
  overflow: auto;
}

body {
  font-family: Times New Roman;
  background-color: lightgray;
}
  
  /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid rgb(2, 121, 2);
  background-color: green;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: rgb(78, 173, 78);
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: rgb(52, 163, 52);
}

/* Style the tab content */
.tabContent {
  display: none;
  padding: 6px 12px;
  border: 1px solid 
  background-color: lightgoldenrodyellow;
  border-top: none;
}

.yesOrNo {
  overflow: hidden;
}

.yesOrNo button.active {
  background-color: #ccc;
}

.yesOrNoContent {
  display:none
}</style>
  <title>Clinic Database</title>
</head>

<body>
  <p>Welcome to your account!</p>
  <!--This connects to the JavaScript code -->
  <script src="patient.js"></script>

  <div class="tab">
    <button class="tabLink" onclick="tabButton(event, 'VA')">View Appointments</button>
    <button class="tabLink" onclick="tabButton(event, 'RA')">Reschedule Appointments</button>
    <button class="tabLink" onclick="tabButton(event, 'DA')">Cancel Appointments</button>
    <button class="tabLink" onclick="tabButton(event, 'CA')">Create Appointments</button>
    <button class="tabLink" onclick="tabButton(event, 'VMH')">View Medical History</button>
    
  </div>

  <div id="VA" class="tabContent">
    <form action = "viewAppointments.php" method = "GET">
      <label for = "Patient_ID_VA">Please input your ID:</label>
      <input type = "text" id = "Patient_ID_VA" Patient_ID_VA = "Patient_ID_VA" name = "Patient_ID_VA" maxlength="7">
      <button type = "submit" name = "submit" >View Appointment</button>
    </form>
  </div>

  <div id = "RA" class = "tabContent">
  <form action = "changeAppointment.php" method = "GET">
    <label for = "Patient_ID_RA">Please input your ID:</label>
    <input type = "text" id = "Patient_ID_RA" Patient_ID_RA = "Patient_ID_RA" name = "Patient_ID_RA" maxlength="7">
    <button type = "submit" name = "submit" >View Appointment</button>
  </form>
  </div>

  <div id = "DA" class = "tabContent">
  <form action = "deleteAppointment.php" method = "GET">
    <label for = "Patient_ID_DA">Please input your ID:</label>
    <input type = "text" id = "Patient_ID_DA" Patient_ID_DA = "Patient_ID_DA" name = "Patient_ID_DA" maxlength="7">
    <button type = "submit" name = "submit" >View Appointment</button>
  </form>
  </div>

  <div id="CA" class="tabContent">
    <form action = "createAppointment.php" method = "POST">
      <!--Name of the patient with ID "patientID" that corresponds to Patient_ID to the DB-->
      <label for = "Patient_ID_Appointment">ID:</label>
      <input type = "text" id = "Patient_ID_Appointment" Patient_ID = "Patient_ID_Appointment" name = "Patient_ID_Appointment" maxlength="7">

      <!--Name of the patient with id "Name" that corresponds to Patient_Name to the DB-->
      <label for = "Patient_Name_Appointment">Patient Name:</label>
      <input type = "text" id = "Patient_Name_Appointment" Patient_Name = "Patient_Name_Appointment" name = "Patient_Name_Appointment" maxlength="30"><br></br>

      <!--DateTime of the appointment with ID "apptTime" that corresponds to Appointment_Time to the DB-->
      <label for = "Appointment_Time_Appointment">Appointment Date and Time:</label>
      <input type = "datetime-local" id = "Appointment_Time_Appointment" Appointment_Time = "Appointment_Time_Appointment" name = "Appointment_Time_Appointment">

      <br></br>

      <!--Selecting an Office-->
      <label for="Office_Address_Appointment">Select an office:</label>
      <select name="Office_Address_Appointment" id="Office_Address_Appointment">
        <option value="1234 Oaks Dr.">1234 Oaks Dr.</option>
        <option value="7584 DreamWorks Ln.">7584 Dream Works Ln.</option>
        <option value="9462 Door Dash St.">9462 Door Dash St.</option>
      </select><br></br>

      <!--Here should go the specialist/physician ID-->
      <p>Have you received approval from your physician to see a specialists?</p>
      <div class = "yesOrNo">
        <button class = "ynLink" type="button" onclick = "clickedYesOrNo(event, 'yes')">Yes</button>
        <button class = "ynLink" type="button" onclick = "clickedYesOrNo(event, 'no')">No</button>
      </div>
      
      <div id = "yes" class = "yesOrNoContent">
      <label for = "Physician_ID_Appointment">Physician ID that gave you the approval:</label>
      <input type = "text" id = "Physician_ID_Appointment" Physician_ID_Appointment = "Physician_ID_Appointment"  name = "Physician_ID_Appointment_Yes" maxlength = "7"><br></br>

      <label for="Specialist_ID_Appointment">Select the specialist that you would like to see:</label>
      <input type = "text" id = "Specialist_ID_Appointment" Specialist_ID_Appointment = "Specialist_ID_Appointment" name = "Specialist_ID_Appointment" maxlength="7">
      </div>

      <div id = "no" class = "yesOrNoContent">
        <label for = "Physician_ID_Appointment">Select the physician that you would like to see:</label>
        <input type = "text" id = "Physician_ID_Appointment" Physician_ID_Appointment = "Physician_ID_Appointment" name = "Physician_ID_Appointment_No" maxlength="7">
      </div>
      <br></br>
      
      <!--Reason for the visit with id "reason" that corresponds to Reason_for_Visit to the DB-->
      <label for = "Reason_For_Visit_Appointment">Reason for Visit:</label>
      <input type = "text" id = "Reason_For_Visit_Appointment" Reason_For_Visit_Appointment = "Reason_For_Visit_Appointment" name = "Reason_For_Visit_Appointment" maxlength="50">

      <!--Selecting an Office-->
      <label for = "Date_Created_Appointment">Date Appointment was Created:</label>
      <input type = "date" id = "Date_Created_Appointment" Date_Created_Appointment = "Date_Created_Appointment" name = "Date_Created_Appointment" maxlength = "100"><br></br>

      <button type = "submit" name = "submit" onclick="return alert('Are you ready to submit?')">Complete Appointment</button>
    </form>
  </div>

  <div id="VMH" class="tabContent">
    <form action = "viewMedicalHistory.php" method = "GET">
      <label for = "Patient_ID_VMH">Please input your ID:</label>
      <input type = "text" id = "Patient_ID_VMH" Patient_ID_VMH = "Patient_ID_VMH" name = "Patient_ID_VMH" maxlength="7">
      <button type = "submit" name = "submit" >View Appointment</button>
    </form>
  </div>
  <br></br>
  <button onclick = "location.replace('Login.php');">Log out</button>
</body>
</html>

<?php 
    if(isset($_REQUEST["error"])){
        echo '<script>alert("'.$_REQUEST["error"].'")</script>';
      }
?>