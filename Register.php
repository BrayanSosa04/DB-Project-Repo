<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Register.css">
    <title>Clinic Database</title>
</head>
<body>
    <form action = "RegisterPat.php" method = "POST">
        <label for = "username_pat">Username:</label>
        <input type = "text" id = "username_pat" username_pat = "username_pat" name = "username_pat" maxlength = "7">No longer than 7 characters</input>

        <label for = "password_pat">Password:</label>
        <input type = "text" id = "password_pat" password_pat = "password_pat" name = "password_pat" maxlength = "30">No longer than 30 characters</input>

        <label for = "date_of_birth_pat">Date of Birth:</label>
        <input type = "date" id = "date_of_birth_pat" date_of_birth_pat = "date_of_birth_pat" name = "date_of_birth_pat"></input>

        <label for = "address_pat">Address:</label>
        <input type = "text" id = "address_pat" address_pat = "address_pat" name = "address_pat" maxlength = "40">No longer than 40 characters</input>

        <label for = "phonenumber_pat">Phone Number:</label>
        <input type = "text" id = "phonenumber_pat" phonenumber_pat = "phonenumber_pat" name = "phonenumber_pat" maxlength = "10">XXX-XXX-XXXX</input>

        <label for = "email_pat">Email:</label>
        <input type = "text" id = "email_pat" email_pat = "email_pat" name = "email_pat" maxlength = "30">john@gmail.com</input>

        <label for = "Today_Date_pat">Todays Date:</label>
        <input type = "date" id = "Today_Date_pat" Today_Date_pat = "Today_Date_pat" name = "Today_Date_pat"></input>
        <button type = "submit" name = "submit" >Finish Registering</button>
    </form>
</body>
</html>


<!-- if(invalidID(username_pat) !== false) {
        header("location: ../Register.php?error=invalidID);
        echo
        "<script> alert('Wrong password'); <script>"
    }
    