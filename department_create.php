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
  <h1>Create New Department</h1>

  <section id = "DeptCOverview">
    <form action = "department_create2.php" method = "POST">
      <label for = "DeptCName">Name:</label>
      <input type = "text" id = "DeptCName" DeptCName = "DeptCName" name = "DeptCName">

      <label for = "DeptCOffice">Office:</label>
      <input type = "text" id = "DeptCOffice" DeptCOffice = "DeptCOffice" name = "DeptCOffice">

      <label for = "DeptCSpecialist">Head Specialist:</label>
      <input type = "text" id = "DeptCSpecialist" DeptCSpecialist = "DeptCSpecialist" name = "DeptCSpecialist">

      <label for = "DeptCModifiedBy">Enter Your ID:</label>
      <input type = "text" id = "DeptCModifiedBy" DeptCModifiedBy = "DeptCModifiedBy" name = "DeptCModifiedBy">

      <br></br>
      <button type = "submit" name = "submit">Add Department</button>
      <button type = "submit" name = "submit_c" formaction = "CEO.php">Return to CEO page</button>
    </form>
  </section>
</body>