<?php
    session_start();
    error_reporting(0);
    if(!$_SESSION['session_is_alive']){
		header("Location:../index.php");
	}else{
        if($_GET['get']){
            $con=mysqli_connect("localhost","root","","naima_web_application_practice");
            $sql="SELECT * FROM order_food WHERE customer_serial=".$_SESSION['customer_serial']." ORDER BY serial DESC";
			$result=mysqli_query($con,$sql);
			$searchData = array();
			while ($row=mysqli_fetch_array($result)) {
				# code...
				$searchData[] = $row;
			}
			//returning response in JSON format
			echo json_encode($searchData);
        }else{
            header("Location:../index.php");
        }
        
    }

?>