<?php
    error_reporting(0);
    session_start();
    $_SESSION['session_is_alive'] = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/common_css_between_login&registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   
    <form action="../php/login.php" method="post">
        <div class="container-fluid login_background">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container login_form">
                        <div class="row">
                            <div class="col-lg-6 left_login_form">
    
                                <div class="container-fluid">
                                    <div class="row left_login_form_top_row">
                                        <div class="col-lg-12">
                                            <img src="../images/undraw_Playful_cat_re_bxiu.svg" width="450px" alt="">
                                        </div>
                                    </div>
                                    <div class="row left_login_form_bottom_row">
                                        <div class="col-lg-12">
                                            <h3>Eat thoughtfully, Live joyfully!</h3>
                                            <p>Healthy eating is all about balance. Join our food community, browse recipes, shop for kitchen, cooking, and home products, enter our contests, and get advice from our hotline..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 right_login_form">
    
                                <div class="row right_login_form_row_1">
                                    <div class="col-lg-12">
                                        <h3>Mix Of Flavors</h3>
                                    </div>
                                </div>
    
                                <div class="row right_login_form_row_2">
                                    <div class="col-lg-12">
                                        <h4>Welcome To Login Page</h4>
                                    </div>
                                </div>
    
                                <div class="row right_login_form_row_3">
                                    <div class="col-lg-12">
                                        Email
                                        <input type="text" size="50%" name="email" id="email">
                                    </div>
                                </div>
    
                                <div class="row right_login_form_row_3">
                                    <div class="col-lg-12">
                                        Password
                                        <input type="password" size="50%" name="password" id="password">
                                    </div>
                                </div>
    
                                <div class="row right_login_form_row_4">
                                    <div class="col-lg-12">
                                        <a href="./reset_password.php">Forgot Password?</a>
                                    </div>
                                </div>
    
                                <div class="row right_login_form_row_5">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-2">
                                        <button type="submit">LogIn</button>
                                    </div>
                                    <div class="col-lg-5"></div>
                                </div>
    
                                <div class="row right_login_form_row_6">
                                    <div class="col-lg-12">
                                        New here? <a href="./registration.php">Create Account</a>
                                    </div>
                                </div>
    
    
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../javascript/login.js"></script>
</body>
</html>