<?php
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
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_panel.css">
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
                            <a href="./my_orders.php">My Orders</a>
                        </li>
                        <?php 
                            if($_SESSION['admin']){ 
                        ?>
                            <li>
                                <a href="#">Admin Panel</a>
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


    <div class="contain-fluid admin_panel">
        <div class="row h-100">

            <div class="col-lg-8 admin_panel_left h-100 overflow-auto">
                <h1>Search Food</h1>
                <div id="foods"></div>
            </div>

            <div class="col-lg-4 admin_panel_right">
                <form method="post" action="../php/admin_panel.php" enctype="multipart/form-data">
                    <h1>Add Food Item</h1>
                    <div class="row admin_panel_right_row">
                        <div class="col-lg-4">
                            <p>Select an image</p>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                    <div class="row admin_panel_right_row">
                        <div class="col-lg-4">
                            <p>Select Food Type</p>
                        </div>
                        <div class="col-lg-8">
                            <select name="type" id="type">
                                <option value="">Select a type</option>
                                <option value="Starter">Starter</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Desert">Desert</option>
                                <option value="Drinks">Drinks</option>
                            </select>
                        </div>
                    </div>
                    <div class="row admin_panel_right_row">
                        <div class="col-lg-4">
                            <p>Food Name</p>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="row admin_panel_right_row">
                        <div class="col-lg-4">
                            <p>Food Price</p>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="price" id="price">
                        </div>
                    </div>
                    <div class="row admin_panel_right_row">
                        <div class="col-lg-4">
                            <p>Food Description</p>
                        </div>
                        <div class="col-lg-8">
                            <textarea name="description" id="description" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row admin_panel_right_row">
                        <div class="col-lg-12">
                            <button type="submit">Add Food To Menu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <Script src="../javascript/admin_panel.js"></Script>
</body>
</html>