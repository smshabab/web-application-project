<?php
    session_start();
    $_SESSION['session_is_alive'] = false;
    if (!empty($_POST)) {
            
        $email = trim($_POST['email']);
        $password = $_POST['password'];


        echo $email." ".$password."\n";
        
        if(!empty($email) && !empty($password)){
            if(check_user($email, $password)){
                $_SESSION['session_is_alive'] = true;
                echo "Send user to dash borad<br>";
                header("Location:../html/dashboard.html");
            }else{
                echo "User do not exist (error)<br>";
                echo "Email or password maybe incorrect<br>";
                header("Location:login.html");
            }
            
        }else{
            header("Location:login.html");
        }

    }else{
        header("Location:login.html");
    }


    function check_user($email, $password){
        $con=mysqli_connect("localhost","root","","naima_web_application_practice");

		if($con){
            echo "Database connected successfully...<br/>";

            $sql="SELECT * FROM registration WHERE email='".$email."' and password='".$password."'";

            $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)==1){
                return true;
            }else{
                return false;
            }


		}else{
			die("Database not connected".mysqli_connect_error()."<br/>");
            header("Location:login.html");
		}
    }


?>