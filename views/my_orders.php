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
    <title>My Orders</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/my_orders.css">
</head>
<body>
    <div class="contain-fluid header fixed-top">
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
                            <a href="./order_food.php">Order Food</a>
                        </li>
                        <li>
                            <a href="#">My Orders</a>
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
    
    

    <div class="container" style="margin-top:200px">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">

                <div class="recipt">
                    <div class="row">
                        <div class="col-lg-12" style="margin-top:50px">
                            <h3>ORDER NO : <span id="order_no" style="margin: 0 10px;"></span></h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center" style="margin-top:50px">
                        <div class="col-lg-1">
                            <h4>NO</h4>
                        </div>
                        <div class="col-lg-4" style="text-align:left;">
                            <h4>NAME</h4>
                        </div>
                        <div class="col-lg-2">
                            <h4>QUANTITY</h4>
                        </div>
                        <div class="col-lg-3" style="text-align:right;">
                            <h4>PRICE</h4>
                        </div>
                    </div>

                    <div id="selected_foods">

                    </div>

                    <div class="row d-flex justify-content-center" style="margin:50px 100px">
                        <div class="col-lg-6" style="text-align:left;">
                            <h5>PAYMENT METHOD >>> CASH ON DELIVERY</h5>
                        </div>
                        <div class="col-lg-6" style="text-align:right;">
                            <h5>TOTAL PRICE : <span id="total_price" style="margin: 0 10px;"></span>BDT</h5>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../javascript/my_orders.js"></script>
</body>
</html>