<form action = "CEO.php">
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
  <h1>Create New Office</h1>

  <section id = "OSVCOverview">
    <form action = "office_create2.php" method = "POST">
      <label for = "OSVCOffice_ID">Office ID:</label>
      <input type = "text" id = "OSVCOffice_ID" OSVCOffice_ID = "OSVCOffice_ID" name = "OSVCOffice_ID">

      <label for = "OSVCAddress">Address:</label>
      <input type = "text" id = "OSVCAddress" OSVCAddress = "OSVCAddress" name = "OSVCAddress">

      <label for = "OSVCDate">Date Estabished:</label>
      <input type = "text" id = "OSVCDate" OSVCDate = "OSVCDate" name = "OSVCDate">

      <label for = "OSVCBudget">Budget Allocation:</label>
      <input type = "text" id = "OSVCBudget" OSVCBudget = "OSVCBudget" name = "OSVCBudget">

      <button type = "submit" id = "OSVCsubmit" name = "OSVCsubmit">Add Office</button>
    </form>
  </section>
</body>

<button type = "submit" name = "submit">Return to CEO page</button>
<<<<<<< HEAD
</form>
=======
</form>
>>>>>>> ca5d93f73405b8f0dd21d2422adcb3159a9f5e33
