<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Register.css">
    <title>Clinic Database</title>
</head>
<body>
    <script src="tabButton.js"></script>
    <div className='Register'>
          <div className = 'link'>
            <button className='tabLink' onclick="tabButton(event, 'PAT')">REGISTER AS A PATIENT</button>
          </div>
          <div className = 'link1'>
            <button className='tabLink' onclick="tabButton(event, 'PHY')">REGISTER AS A PHYSICIAN</button>
          </div>
          <div className = 'link2'>
            <button className='tabLink' onclick="tabButton(event, 'SPEC')">REGISTER AS A SPECIALIST</button>
          </div>

          <div id="PHY" class="tabContent">
            <form action = "RegisterPHY.php" method = "POST">
                <ul className="information-boxes">
                    <p className='container-description'>We're so excited you'll be joining us!<br />Please enter your desired credentials.</p>
                    <ul className='boxes-container'>
                        <li className='guest-info'>
                            <label className='Label'>Username:</label>
                            <input id='username_phy' className='username_phy' type='text' minLength="2" maxLength="50" title='Please enter the username you will use to sign in.' required placeholder='Enter a desired username.'
                            />
                        </li>
                        <li className='guest-info'>
                            <label className='Label'>Password:</label>
                            <input id='password_phy' className='password_phy' type='password' minLength="2" maxLength="50" title='Please enter the password you will use to sign in.' required placeholder='Enter a password.'
                        />
                        </li>
                        <li className='guest-info'>
                            <label className='Label'>Full Name:</label>
                            <input  id='fullname_phy' className='fullname_phy' type='text' title='Please enter your full name.' minLength="4" maxLength="25" required placeholder='Enter your full name.'
                        />
                        </li>
                        <li className='guest-info'>
                            <label className='Label'>Email:</label>
                            <input id='email_phy' className='email_phy' type='text' title='Please enter your email.' minLength="4" maxLength="25" required placeholder='Enter your email.'
                        />
                        </li>
                        <li className='guest-info'>
                            <label className='Label'>Phone Number:</label>
                            <input id='phone_number_phy' className='phone_number_phy' type='text' title='Please enter your phone number.' minLength="10" maxLength="10" required placeholder='Enter your phone number.'
                        />
                        </li>
                        <li className='guest-info'>
                            <label className='Label'>Date of Birth:</label>
                            <input id='date_of_birth_phy' className='date_of_birth_phy' type='text' title='Please enter your phone number.' minLength="4" maxLength="10" required placeholder='Enter your date of birth.'
                        />
                        </li>
                        <li className='guest-info'>
                            <label className='Label'>Sex:</label>
                            <input id= 'sex_phy' className='sex_phy' type='text' title='Please enter your phone number.' minLength="1" maxLength="1" required placeholder='Enter your sex (M, F, O).'
                        />
                        </li>
                    </ul>
                    <li>
                        <button data-testid="button" className='Submit' type='submit'>Register</button>
                    </li>
                    </ul>
              </div>
            </form>
          </div>

          <div id="SPEC" class="tabContent">
            <form action = "RegisterSPEC.php" method = "POST">
                    <ul className="information-boxes">
                        <p className='container-description'>We're so excited you'll be joining us!<br />Please enter your desired credentials.</p>
                        <ul className='boxes-container'>
                            <li className='guest-info'>
                                <label className='Label'>Username:</label>
                                <input id='username_spec' className='username_spec' type='text' minLength="2" maxLength="50" title='Please enter the username you will use to sign in.' required placeholder='Enter a desired username.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Password:</label>
                                <input id='password_pass' className='password_pass' type='password' minLength="2" maxLength="50" title='Please enter the password you will use to sign in.' required placeholder='Enter a password.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Full Name:</label>
                                <input id = 'fullname_spec' className='fullname_spec' type='text' title='Please enter your full name.' minLength="4" maxLength="25" required placeholder='Enter your full name.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Email:</label>
                                <input id = 'email_spec' className='email_spec' type='text' title='Please enter your email.' minLength="4" maxLength="25" required placeholder='Enter your email.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Phone Number:</label>
                                <input id = 'phone_number_spec' className='phone_number_spec' type='text' title='Please enter your phone number.' minLength="10" maxLength="10" required placeholder='Enter your phone number.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Date of Birth:</label>
                                <input id = 'date_of_birth_spec' className='date_of_birth_spec' type='text' title='Please enter your phone number.' minLength="4" maxLength="10" required placeholder='Enter your date of birth.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Specialist Practice:</label>
                                <input id='specialist_practice' className='specialist_practice' type='text' title='Please enter your phone number.' minLength="4" maxLength="50" required placeholder='Enter your specialty of practice.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Sex:</label>
                                <input id ='sex_spec' className='sex_spec' type='text' title='Please enter your phone number.' minLength="1" maxLength="1" required placeholder='Enter your sex (M, F, O).'
                            />
                            </li>
                        </ul>
                        <li>
                            <button data-testid="button" className='Submit' type='submit'>Register</button>
                        </li>
                    </ul>
                </div> 
            </form>
          </div>
          <div id="PAT" class="tabContent">
            <form action = "RegisterPAT.php" method = "POST">
                <div className= 'Register'>
                    <ul className="information-boxes"> 
                        <p className='container-description'>We're so excited you'll be joining us!<br />Please enter your desired credentials.</p>
                        <ul className='boxes-container'>
                            <li className='guest-info'>
                                <label className='Label'>Username:</label>
                                <input id='username_pat' className='username_pat' type='text' minLength="2" maxLength="50" title='Please enter the username you will use to sign in.' required placeholder='Enter a desired username.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Password:</label>
                                <input id='password_pat' className='password_pat' type='password' minLength="2" maxLength="50" title='Please enter the password you will use to sign in.' required placeholder='Enter a password.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Full Name:</label>
                                <input id='fullname_pat' className='fullname_pat' type='text' title='Please enter your full name.' minLength="4" maxLength="25" required placeholder='Enter your full name.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Email:</label>
                                <input id='email_pat' className='email_pat' type='text' title='Please enter your email.' minLength="4" maxLength="50" required placeholder='Enter your email.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Phone Number:</label>
                                <input id='phonenumber_pat' className='phonenumber_pat' type='text' title='Please enter your phone number.' minLength="10" maxLength="10" required placeholder='Enter your phone number.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Date of Birth:</label>
                                <input id='date_of_birth_pat' className='date_of_birth_pat' type='text' title='Please enter your phone number.' minLength="4" maxLength="10" required placeholder='Enter your date of birth.'
                            />
                            </li>
                            <li className='guest-info'>
                                <label className='Label'>Address:</label>
                                <input id='address_pat' className='address_pat' type='text' title='Please enter your phone number.' minLength="4" maxLength="60" required placeholder='Enter your address.'
                            />
                            <li className='guest-info'>
                                <label className='Label'>Date Created:</label>
                                <input id='sex_pat' className='Today_Date_pat' type='date' title='Please enter your phone number.' minLength="1" maxLength="1" required placeholder='Enter your sex (M, F, O).'
                            />
                        </ul>
                        <li>
                            <button data-testid="button" className='Submit' type='submit'>Register</button>
                        </li>
                    </ul>
                </div>
            </form>
          </div>
    </div>


</body>
</html>


<!-- if(invalidID(username_pat) !== false) {
        header("location: ../Register.php?error=invalidID);
        echo
        "<script> alert('Wrong password'); <script>"
    }
    