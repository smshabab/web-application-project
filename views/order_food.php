<?php
    error_reporting(0);
    session_start();
    if(!$_SESSION['session_is_alive']){
        header("Location:login.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Food</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/order_food.css">
</head>
<body>
    <div class="container-fluid header fixed-top">

        <div class="row">
            <div class="col-lg-3 search">
                <input type="text" placeholder="Search"/>
            </div>
            <div class="col-lg-6 d-flex justify-content-center menu">
                <ul>
                    <li>
                        <a href="../index.php">Home</a>
                    </li>

                    <li>
                        <a href="../index.php#contact">Contact</a>
                    </li>
                    

                    <?php 
                        if($_SESSION['session_is_alive']){ 
                    ?>
                        <li>
                            <a href="#">Order Food</a>
                        </li>
                        <li>
                            <a href="./my_orders.php">My Orders</a>
                        </li>
                        <?php 
                            if($_SESSION['admin']){ 
                        ?>
                            <li>
                                <a href="./admin_panel.php">Admin Panel</a>
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
                        <button onclick="window.location.href='./login.php'">Logout</button>
                        <button onclick="window.location.href='#'">Cart</button>
                    <?php 
                        }else{ 
                    ?>
                        <button onclick="window.location.href='./login.php'">Login</button>
                        <button onclick="window.location.href='./registration.php'">Signup</button>
                    <?php
                        } 
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid order_food">
        <div class="row h-100">
            <div class="col-lg-8 order_food_menu overflow-auto h-100">
                <div class="row"><div class="col-lg-12"><h1>Order Menu</h1></div></div>
                <div class="row"><div class="col-lg-12"><h2>Starters</h2></div></div>
                <div class="row" id="starters"></div>
                <div class="row"><div class="col-lg-12"><h2>Main Courses</h2></div></div>
                <div class="row" id="mains"></div>
                <div class="row"><div class="col-lg-12"><h2>Deserts</h2></div></div>
                <div class="row" id="deserts"></div>
                <div class="row"><div class="col-lg-12"><h2>Drinks</h2></div></div>
                <div class="row" id="drinks"></div>

            </div>
            <div class="col-lg-4 order_food_cart overflow-auto h-100">
                <div class="row"><div class="col-lg-12"><h1>Food Cart (<span id="total_food_count"></span>)</h1></div></div>
                <div class="row cart">
                    <div class="col-lg-12 cart-headers container-fluid">
                        <div class="row">
                            <div class="col-lg-5">
                                Product
                            </div>
                            <div class="col-lg-3">
                                Quantity
                            </div>
                            <div class="col-lg-2">
                                Price
                            </div>
                            <div class="col-lg-2">
                                Total Price
                            </div>
                        </div>
                    </div>
                    <div class="row" id="list_cart"></div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-12 cart-bottom">
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-2">
                                Total Price
                            </div>
                            <div class="col-lg-2">
                                <div id="total_price">0</div> BDT
                            </div>
                            <div class="col-lg-4">
                                <button onclick="confirmOrderButtonPressHandler()">Confirm Order</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../javascript/order_food.js"></script>
</body>
</html>















<!-- <div class="col-lg-12 cart-items">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="../images/gyoza.webp" alt="" width="100px">
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="product-right">
                                                <p>Name</p><br>
                                                <button>Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="quantity">
                                    <button>-</button>
                                    1
                                    <button>+</button>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                200 BDT
                            </div>
                            <div class="col-lg-2">
                                200 BDT
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 cart-items">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="../images/gyoza.webp" alt="" width="100px">
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="product-right">
                                                <p>Name</p><br>
                                                <button>Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="quantity">
                                    <button>-</button>
                                    2
                                    <button>+</button>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                200 BDT
                            </div>
                            <div class="col-lg-2">
                                200 BDT
                            </div>
                        </div>
                    </div> -->