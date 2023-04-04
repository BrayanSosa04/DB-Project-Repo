<head>
<link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
</head>
<body>
<div className="Login">
    <form action='Login.inc.php' method='POST'>
            <ul className="information-boxes">
                <label className='container-title'>LOGIN</label>
                <ul className='boxes-container'>
                    <li className='guest-info'>
                        <label className="Label">Username:</label>
                        <input id="username_pat" name="username_pat" className="username_pat" type="text" title="Please enter your username." minLength="2" maxLength="50" required placeholder="Enter your username."
                        />
                        
                    </li>
                    <li className='guest-info'>
                        <label className="Label">Password:</label>
                        <input id="password_pat" name="password_pat" className="password_pat" type="password" title="Please enter your password." minLength="2" maxLength="50" required placeholder="Enter your password."
                        />
                    </li>
                </ul>
                <li>
                    <button className="Submit" data-testid="button" type="submit">Login</button>
                </li>
                <div className="Login-Options">
                    <p>Don't have an account?
                        <br/><a href="Register.php">Sign up here</a>.
                    </p>
                </div>
            </ul>
    </form>
    </div>
</body>
</html>