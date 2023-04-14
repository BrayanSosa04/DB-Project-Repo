<!LOGIN html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>

<div>
    <p class="title"><span><b>Log In</b></span></p>
</div>

<div class="Login">
    <form action='Login.inc.php' method='POST'>
        <table class="information-boxes">
            <tr>
                <th><label className="Label">Username:</label></th>
                <td><input id="username_pat" className="username_pat" type="text" title="Please enter your username." minLength="2" maxLength="50" required placeholder="Enter your username."></td>
            </tr>                            
            <tr>
                <th><label className="Label">Password:</label></th>
                <td><input id="password_pat" className="password_pat" type="password" title="Please enter your password." minLength="2" maxLength="50" required placeholder="Enter your password."></td>
            </tr>
        </table>
</div>    

<div class ="button">
    <button type="submit" class="button" name="submit">Login</button>
                    <!--</li>
                    <div className="Login-Options">
                        <p>Don't have an account?
                            <br/><a href="Register.php">Sign up here</a>.
                        </p>
                    </div>-->
</div>
    </form>
</div>

</html>