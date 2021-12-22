<?php
    error_reporting(0);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="contain-fluid header">

        <div class="row">
            <!-- <div class="col-lg-3 search">
                <input type="text" placeholder="Search"/>
            </div> -->
            <div class="col-lg-9 menu">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>

                    <?php 
                        if($_SESSION['session_is_alive']){ 
                    ?>
                        <li>
                            <a href="./views/order_food.php">Order Food</a>
                        </li>
                        <li>
                            <a href="./views/my_orders.php">My Orders</a>
                        </li>
                        <?php 
                            if($_SESSION['admin']){ 
                        ?>
                            <li>
                                <a href="./views/admin_panel.php">Admin Panel</a>
                            </li>
                        <?php 
                            }
                        ?>
                        
                    <?php 
                        }
                    ?>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="buttons">
                    <?php 
                        if($_SESSION['session_is_alive']){ 
                    ?>
                        <button onclick="window.location.href='./views/login.php'">Logout</button>
                    <?php 
                        }else{ 
                    ?>
                        <button onclick="window.location.href='./views/login.php'">Login</button>
                        <button onclick="window.location.href='./views/registration.php'">Signup</button>
                    <?php
                        } 
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid banner">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1>Welcome</h1>
                <p>
                    paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap 
                    paragarap paragarap paragarap pa paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap 
                </p>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <button onclick="window.location.href='./views/order_food.php'">Order Food</button>
                <button onclick="window.location.href='#contact'">Contact US</button>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner2.png" alt="" width="200px">
                    </div>
                    <div class="col-lg-8">
                        <p>Food Name</p>
                        <h1>#31</h1>
                        <p>Food Description Food Description Food Description Food Description Food Description Food Description Food Description</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner2.png" alt="" width="200px">
                    </div>
                    <div class="col-lg-8">
                        <p>Food Name</p>
                        <h1>#31</h1>
                        <p>Food Description Food Description Food Description Food Description Food Description Food Description Food Description</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner2.png" alt="" width="200px">
                    </div>
                    <div class="col-lg-8">
                        <p>Food Name</p>
                        <h1>#31</h1>
                        <p>Food Description Food Description Food Description Food Description Food Description Food Description Food Description</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner2.png" alt="" width="200px">
                    </div>
                    <div class="col-lg-8">
                        <p>Food Name</p>
                        <h1>#31</h1>
                        <p>Food Description Food Description Food Description Food Description Food Description Food Description Food Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 left">
                <h1>Header</h1>
                <p>
                    paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap 
                    paragarap paragarap paragarap pa paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap 
                    paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap 
                    paragarap paragarap paragarap pa paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap 
                    
                </p>
                <button onclick="window.location.href='./views/order_food.php'">Our Menu</button>
            </div>
            <div class="col-lg-6 right">

            </div>
        </div>
    </div>


    <div class="container card-holder">
        <div class="row">
            <div class="col-lg-12">
                <h1>Learn Cooking Online</h1>
                <p>paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap paragarap parag</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card card1 "></div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card card2"></div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card card3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button onclick="window.location.href='./views/order_food.php'">Observe Our Food Menu</button>
            </div>
        </div>
    </div>

    <div class="awesome_setion contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    
                </div>
                <div class="col-lg-4">
                    <h1>CONTACT US</h1>
                    <hr>
                    <p>For Any Query Please Call +8801754296133</p>
                </div>
                <div class="col-lg-4">
                    
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" name="" placeholder="Name">
                        <input type="text" name="" placeholder="Email">
                        <input type="text" name="" placeholder="Subject">
                    </div>
                    <div class="col-lg-6"> 
                        <textarea rows="50" cols="5" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 tabstext contact_button">
                    <button>Send Message</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>