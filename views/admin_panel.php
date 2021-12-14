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
    
    <div class="contain-fluid header">
        <div class="row">
            <div class="col-lg-3 search">
                <input type="text" placeholder="Search"/>
            </div>
            <div class="col-lg-6 d-flex justify-content-center menu">
                <ul>
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a href="./order_food.html">Order Food</a>
                    </li>
                    <li>
                        <a href="#">My Orders</a>
                    </li>
                    <li>
                        <a href="#">Admin Panel</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="buttons">
                    <button onclick="window.location.href='./views/login.php'">Login</button>
                    <button onclick="window.location.href='./views/registration.php'">Signup</button>
                    <button>Cart</button>
                </div>
            </div>
        </div>
    </div>


    <div class="contain-fluid admin_panel">
        <div class="row h-100 position-fixed">
            <div class="col-lg-8 admin_panel_left h-100 overflow-auto">
                <h1>Search Product</h1>
                
                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>



                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>
                <div class="food-card">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="../images/gyoza.webp" alt="" width="150px"> 
                        </div>
                        <div class="col-lg-3 second-col">
                            <table>
                                <tr>
                                    <th width="40%">Name</th>
                                    <td width="20%">:</td>
                                    <td width="40%">Gyoza</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>200 BDT</td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td>:</td>
                                    <td>Starter</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 third-col">
                            <table>
                                <tr>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                        kajbskldjabkdj aksdbaksjhdbajs ahdbkahsbdkas dakshdbakhsdak sdkahsdbakhdsbakjsd akshdgbakshbdkahs
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-2 fourth-col">
                            <button>Edit</button><br><br>
                            <button>Delete</button>
                        </div>
                    </div>
                </div>





            </div>
            <div class="col-lg-4 admin_panel_right">
                <h1>Add Food Item</h1>
                <div class="row admin_panel_right_row">
                    <div class="col-lg-4">
                        <p>Select an image</p>
                    </div>
                    <div class="col-lg-8">
                        <input type="file">
                    </div>
                </div>
                <div class="row admin_panel_right_row">
                    <div class="col-lg-4">
                        <p>Select Food Type</p>
                    </div>
                    <div class="col-lg-8">
                        <select name="type" id="type">
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
                        <input type="text">
                    </div>
                </div>
                <div class="row admin_panel_right_row">
                    <div class="col-lg-4">
                        <p>Food Price</p>
                    </div>
                    <div class="col-lg-8">
                        <input type="number">
                    </div>
                </div>
                <div class="row admin_panel_right_row">
                    <div class="col-lg-4">
                        <p>Food Description</p>
                    </div>
                    <div class="col-lg-8">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row admin_panel_right_row">
                    <div class="col-lg-12">
                        <button>Add Food To Menu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>