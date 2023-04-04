<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width">-->
  <link href="ceo_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1>Welcome, CEO</h1>
  <script src="ceo_script.js"></script>

  <section id="overview">
    <button id="OStoggle" onclick="toggleOS()">Show Office Summary</button>
    <button id="DStoggle" onclick="toggleDS()">Show Doctor Summary</button>
    <button id="RStoggle" onclick="toggleRS()">Show Revenue Summary</button>
  </section>

  <section id="OSV">
    <h2 id="OfficeSummary">Office Summary</h2>
    <form action = "office_report.php" method = "GET">
      <label for = "OSVinput">Please input the minimum number of departments per office:</label>
      <input type = "number" id = "OSVinput" OSVinput = "OSVinput" name = "OSVinput">
      <button type = "submit" id = "OSVsubmit" name = "OSVsubmit">View Office Report</button>
    </form>
  </section>

  <section id="DSV">
    <h2 id="DoctorSummary">Doctor Summary</h2>
    <form action = "doctor_report.php" method = "GET">
      <label for = "DSVinput">Please input the minimum salary of physicians that you would like to see:</label>
      <input type = "number" id = "DSVinput" DSVinput = "DSVinput" name = "DSVinput">
      <button type = "submit" id = "DSVsubmit" name = "DSVsubmit">View Doctor Report</button>
      </form>
  </section>

  <section id="RSV">
    <h2 id="Revenue Summary">Revenue Summary</h2>
    <form action = "revenue_report.php" method = "GET">
      <label for = "RSVinput">Please input the max revenue per office:</label>
      <input type = "number" id = "RSVinput" RSVinput = "RSVinput" name = "RSVinput">
      <button type = "submit" id = "RSVsubmit" name = "RSVsubmit">View Revenue Report</button>
    </form>
  </section>

  <button onclick = "location.replace('Login.php');">Log out</button>
</body>

<footer>
  <address>Main Office: 1234 Oaks Dr.</address>
  <p>Established: 1980-04-07</p>
</footer>

</html>