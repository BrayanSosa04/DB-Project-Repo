<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Register.css">
    <title>Clinic Database</title>
</head>
<body>
    <script src="tabButton.js"></script>
    <form action = "RegisterPat.php" method = "POST">
        <label for = "username_pat">Username:</label>
        <input type = "text" id = "username_pat" username_pat = "username_pat" name = "username_pat" maxlength = "7">No longer than 7 characters</input>
    </form>
</body>
</html>


<!-- if(invalidID(username_pat) !== false) {
        header("location: ../Register.php?error=invalidID);
        echo
        "<script> alert('Wrong password'); <script>"
    }
    