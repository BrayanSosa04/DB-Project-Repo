<form action = "Register.php">
    <?php
        include_once 'connectToTheDB.php';

        // $variable_name = $_method_of_the_form['name_for_the_input']
        $Patient_ID = $_POST['username_pat'];
        $Patient_Pass = $_POST['password_pat'];
        $Patient_Name = $_POST['fullname_pat'];
        $Patient_Email = $_POST['email_pat'];
        $Patient_Phone = $_POST['phonenumber_pat'];
        $Date_Of_Birth = $_POST['date_of_birth_pat'];
        $Patient_Address = $_POST['address_pat'];
        $Date_Created = $_POST['Today_Date_pat'];


        //has code for the query
        $sql = "INSERT INTO user_account(Patient_ID, user_account.Password, Email, Phone_Number, Date_Of_Birth, user_account.Address, Date_Created, Last_Modified_Date, Last_Modified_By, Flagged_Delete) 
        VALUES ('$Patient_ID', '$Patient_Pass', '$Patient_Email', '$Patient_Phone', '$Date_Of_Birth', '$Patient_Address', '$Date_Created', '$Date_Created', '$Patient_ID', 0);";
        $result = mysqli_query($conn, $sql); //creates the query

        if($result){
            echo 'Registered Patient Successfully!';
        }
        else{
            echo 'An error occured when registering as a patient';
        }
    ?>
    <br></br>
    <button type = "submit" name = "submit" >Return to the main page</button>
</form>