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
    <div class="contain-fluid header fixed-top">

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
                We are Here for Fast and easy food delivery service to spoil the foodie within you. We are always ready to satiate your cravings and deliver to you authentic and healthy foods. we are committed to helping you live more healthily by providing a good quality foods based on your nutrition needs 
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
                        <img src="./images/banner3.png" alt="" width="190px">
                    </div>
                    <div class="col-lg-8">
                        <p>Beaf Steak</p>
                        <h1>#31</h1>
                        <p>Juicy steak and crisp-golden potatoes are pan-seared and cooked to perfection with a luscious garlic, herbs and butter sauce</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner7.png" alt="" width="195px">
                    </div>
                    <div class="col-lg-8">
                        <p>Chicken Teriyaki Rice</p>
                        <h1>#32</h1>
                        <p>This Teriyaki Chicken Rice Bowl is made up of tender juicy chicken, homemade teriyaki sauce, and fresh vegetables</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner4.png" alt="" width="200px">
                    </div>
                    <div class="col-lg-8">
                        <p>Cheese Pasta</p>
                        <h1>#33</h1>
                        <p>Adding cream cheese to tomato sauce gives the dish a creamy tang that is just delicious.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 food-details">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="./images/banner5.png" alt="" width="180px">
                    </div>
                    <div class="col-lg-8">
                        <p>Fruit Salad</p>
                        <h1>#34</h1>
                        <p>Common ingredients used in fruit salads include strawberries, pineapple, honeydew, watermelon, grapes, and kiwifruit. Various recipes may call for the addition of nuts, fruit juices, certain vegetables, yogurt, or other ingredients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 left">
                <h1>About us</h1>
                <p>
                Our success comes from our commitment to quality. Our website  offers credible information to help you make healthful eating choices. It serves as a gateway to reliable information on nutrition, healthy eating, physical activity, and food safety for consumers. Our Ethics is With good and honest food we mean food that both tastes good, has a positive impact on our health, food that´s responsibly produced, food that´s a result of plants and animals being treated well, and food that inspires us.   Our  is an online store for those who love great food and great ingredients. We offer you the ultimate selection of international specialty foods.
                    
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
                <h1>Crave it? Grab it on the web</h1>
                <p>We hope you enjoy your visit to our website</p>
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
                    <p>For Any Query Please Call +8801754000030</p>
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