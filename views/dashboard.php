<?php
    session_start();
    if(!$_SESSION['session_is_alive']){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid dashboard_background">
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid dashboard_form">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="container-fluid left_menu">
                                <ul>
                                    <li><button href="#">Search & Edit Information</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 right_menu">
                            <div class="container-fluid right_menu_top">
                                <div class="row ">
                                    <div class="col-lg-6 left_top_right_menu">
                                        <h3>Page Heading</h3>
                                        <p>This is a small descripton about this page</p>
                                    </div>
                                    <div class="col-lg-6 right_top_right_menu">
                                        <button onclick="location.href='login.php';">LogOut</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="container-fluid right_menu_bottom"> 
                                <div class="row">
                                    <div class="col-lg-12 left_bottom_right_menu">
                                        <input type="text" size="65">
                                        <button>Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid right_menu_bottom"> 
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 left_bottom_right_menu left_bottom_right_menu_change_button_color">
                                        <div id="custom_table">
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 right_bottom_right_menu">
                                        <table border="1" width="100%">
                                            <tr align="center">
                                                <th colspan="2">
                                                    Insert Data into Table
                                                </th>
                                            </tr>
                                            <tr>
                                                <td><h4>Heading 1</h4></td>
                                                <td><input type="number" id="heading_1"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Heading 2</h4></td>
                                                <td><input type="number" id="heading_2"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Heading 3</h4></td>
                                                <td><input type="number" id="heading_3"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Heading 4</h4></td>
                                                <td><input type="number" id="heading_4"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Heading 5</h4></td>
                                                <td><input type="number" id="heading_5"></td>
                                            </tr>
                                            <tr align="center">
                                                <td colspan="2">
                                                    <button onclick="insert_data()">Insert Data</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../javascript/dashboard.js"></script>
</body>
</html>