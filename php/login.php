<?php
    session_start();
    $_SESSION['session_is_alive'] = false;
    $_SESSION['admin'] = false;
    $_SESSION['customer_serial'] = 0;
    if (!empty($_POST)) {
            
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        
        if(!empty($email) && !empty($password)){
            if(check_user($email, $password)){
                $_SESSION['session_is_alive'] = true;
                is_admin($email, $password) ? $_SESSION['admin'] = true : $_SESSION['admin'] = false;
                header("Location:../index.php");
            }else{
                header("Location:../views/login.php");
            }
        }else{
            header("Location:../views/login.php");
        }

    }else{
        header("Location:../views/login.php");
    }

    function check_user($email, $password){
        $con=mysqli_connect("localhost","root","","naima_web_application_practice");

		if($con){

            $sql="SELECT serial FROM registration WHERE email='".$email."' and password='".$password."'";

            $result=mysqli_query($con,$sql);
            
            if(mysqli_num_rows($result)==1){
                while ($row=mysqli_fetch_array($result))
			    {
                    $_SESSION['customer_serial'] = $row['serial'];
                }
                return true;
            }else{
                return false;
            }


		}else{
			die("Database not connected".mysqli_connect_error()."<br/>");
            header("Location:../views/login.php");
		}
    }

    function is_admin($email, $password){
        $con=mysqli_connect("localhost","root","","naima_web_application_practice");

		if($con){
            echo "Database connected successfully...<br/>";

            $sql="SELECT * FROM registration WHERE email='".$email."' and password='".$password."' and user_type='admin'";

            $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)==1){
                return true;
            }else{
                return false;
            }


		}else{
			die("Database not connected".mysqli_connect_error()."<br/>");
            header("Location:../views/login.php");
		}
    }


?>