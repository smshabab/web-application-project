<?php
    session_start();
    error_reporting(0);
    if(!$_SESSION['session_is_alive']){
		header("Location:../index.php");
	}else{
        if($_GET['get']){
            $con=mysqli_connect("localhost","root","","naima_web_application_practice");
            $sql="SELECT * FROM food";
			$result=mysqli_query($con,$sql);
			$searchData = array();
			while ($row=mysqli_fetch_array($result)) {
				# code...
				$searchData[] = $row;
			}
			//returning response in JSON format
			echo json_encode($searchData);
        }else if($_GET['insert']){
            $con=mysqli_connect("localhost","root","","naima_web_application_practice");
            $data = $_GET['insert'];
            $sql = "INSERT INTO `order_food`(`customer_serial`, `food_cart`) VALUES (".$_SESSION['customer_serial'].",'".$data."')";
            if(mysqli_query($con,$sql)){
				echo json_encode("1");
			}else{
				echo json_encode("0");
			}
        }else{
            header("Location:../index.php");
        }
        
    }

?>