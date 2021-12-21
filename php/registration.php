<?php    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

        echo $username." ".$email." ".$password." ".$confirm_password."\n";
        
        if(!empty($username) && !empty($email) && !empty($password) && !empty($confirm_password)){
            if(validate_username($username) && validate_email($email) && validate_password($password) && validate_confirm_password($password, $confirm_password)){
                if(check_for_unique_email($email)){
                    upload_data_to_registration_table($username, $email, $password);
                }else{
                    echo "User already exist (error)";
                }
            }else{
                header("Location:../views/registration.php");
            }
        }else{
            echo '<script>alert("Fields Can not be Empty...!");</script>';
            header("Location:../views/registration.php");
        }
    }else{
        header("Location:../views/registration.php");
    }


    function validate_username($username){
        $check = (preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) ?  true : false;
        return $check;
    }

    function validate_email($email){
        $check = (filter_var($email, FILTER_VALIDATE_EMAIL)) ?  true : false;
        return $check;
    }

    function validate_password($password){
        // $check = (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) ?  true : false;
        $check = true;
        return $check;
    }

    function validate_confirm_password($password, $confirm_password){
        $check = ($password == $confirm_password) ? true : false;
        return $check;
    }
    
    function check_for_unique_email($email){
        $check = false;
        $con=mysqli_connect("localhost","root","","naima_web_application_practice");
        if($con){
            echo "Database connected successfully...<br/>";
            $sql="SELECT `email` FROM `registration` WHERE email='.$email.'";

            $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)==0){
                $check = true;
            }

		}else{
			die("Database not connected".mysqli_connect_error()."<br/>");
            header("Location:../views/login.php");
		}
        return $check;
    }

    function upload_data_to_registration_table($username, $email, $password){


        $con=mysqli_connect("localhost","root","","naima_web_application_practice");

		if($con){
            echo "Database connected successfully...<br/>";
			$sql="INSERT INTO `registration`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

            if(mysqli_query($con,$sql)){
                echo "Row inserted";
                header("Location:../views/login.php");
            }else{
                echo "Insertion failed: ".mysqli_connect_error($con)."<br/>";
            }


		}else{
			die("Database not connected".mysqli_connect_error()."<br/>");
            header("Location:../views/registration.php");
		}
    }
    

?>