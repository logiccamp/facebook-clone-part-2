<?php 
$formReport = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="root main-bg">
        <?php 

            if(isset($_GET['error'])){
                $formReport = "<div class='alert alert-danger'>Invalid Login. Email and/or password </div>";
            }

        ?>
        <div class="signup_container">
            <div class="sigup_wrapper">
                <div class="signup_form_container bg-white shadow rounded">
                    <header class="px-2 pt-2 d-flex justify-content-between">
                        <div>
                            <h3 class="m-0 fw-bold">Sign Up</h3>
                            <small class="black-color">It's quick and easy</small>
                        </div>
                        <a onclick="closesignup()" class="text-decoration-none black-color fs-2" href="#">&times;</a>
                    </header>
                    <hr>
                    <form  class="form pb-3" id="signupform">
                        <div id="report"></div>
                        <div class="row m-0">
                            <div class="col-6 my-2 form-group">
                                <input id="firstname" type="text" class="form-control" placeholder="First name">
                            </div>

                            <div class="col-6 my-2">
                                <input type="text" class="form-control" id="lastname" placeholder="Last name">
                            </div>

                            <div class="col-12 my-2">
                                <input type="text" class="form-control" id="emailorphone" placeholder="Mobile number or email address">
                            </div>
                            <div class="col-12 my-2">
                                <input type="password" class="form-control" id="password" placeholder="New password">
                            </div>

                            <div class="col-12 form-group">
                                <label for=""><small class="black-color">Date of birth</small></label>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" id="d_dob" id="d_dob">
                                            <option value="">Select</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="m_dob" id="m_dob">
                                            <option value="">Select</option>
                                            <option value="1">Jan</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Apr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Aug</option>
                                            <option value="9">Sept</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="y_dob" id="y_dob">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <label for=""><small class="black-color">Gender</small></label>
                                <div class="row">
                                    <div class="col">
                                        <label for="Female" class="w-100 form-control"> Female
                                            <input type="radio" name="gender" value="Female" id="Female">
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label for="Male" class="form-control w-100"> Male
                                            <input type="radio" name="gender" value="Male" id="Male">
                                        </label>
                                    </div>

                                    <div class="col">
                                        <label for="Other" class="w-100 form-control"> Other
                                            <input type="radio" name="gender" value="Other" id="Other">
                                        </label>
                                    </div>

                                    <div class="col-12 my-2">
                                        <p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                                    </div>

                                    <div class="col-12 my-2">
                                        <center>
                                            <button class="btn fw-bold signup_btn" id="signupbtn">Sign Up</button>
                                        </center> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center flex-column logo_content">
                    <h3 class="primary-color">bluebook</h3>
                    <p class="text-dark">Bluebook helps you to communicate and share with family and friends</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center flex-column form_create">
                    <div class="form_container bg-white rounded shadow p-3 mb-3">
                        <form action="includes/_login.php" method="POST" class="form">
                            <?php echo $formReport ?>
                            <div class="form-group my-2">
                                <input type="text" name="email" placeholder="Email address or phone number" class="form-control">
                            </div>

                            <div class="form-group my-2">
                                <input name="password" type="password" placeholder="password" class="form-control">
                            </div>

                            <div class="form-group my-2">
                                <button type="submit" name="loginbtn" class="btn w-100 text-white fw-bold primary-bg">Log In</button>
                            </div>

                            <center>
                                <a href="#" class="primary-color text-decoration-none">Forgotten password?</a>
                            </center>
                            <hr>

                            <div class="form-group my-2">
                                <center>
                                    <a onclick="showSignup()" class="btn py-2 text-white secondary-bg fw-bold create_acct_btn">Create New Account</a>
                                </center>
                            </div>
                        </form>
                    </div>

                    <p> <a class="text-dark" href="#"> <strong>Create a Page</strong></a> for a celebrity, band or business.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/login.js"></script>
</body>
</html>