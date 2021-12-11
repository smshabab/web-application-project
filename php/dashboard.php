<?php

	session_start();
	if(!$_SESSION['session_is_alive']){
		header("Location:index.html");
	}else{
		$con=mysqli_connect("localhost","root","","naima_web_application_practice");

		if(!empty($_GET['id'])){
			$sql="DELETE FROM dashboard WHERE id=".$_GET['id'];
			if(mysqli_query($con,$sql)){
				echo json_encode("1");
			}else{
				echo json_encode("0");
			}
			
		}else if(!empty($_GET['data'])){
			$data = json_decode($_GET['data']);
			$sql="INSERT INTO `dashboard`(`heading_1`, `heading_2`, `heading_3`, `heading_4`, `heading_5`) VALUES (".$data->heading_1.",".$data->heading_2.",".$data->heading_3.",".$data->heading_4.",".$data->heading_5.")";
			if(mysqli_query($con,$sql)){
				echo json_encode("1");
			}else{
				echo json_encode("0");
			}
	
		}else if(!empty($_GET['updated_data'])){
			$data = json_decode($_GET['updated_data']);
			$sql="UPDATE `dashboard` SET `heading_1`=".$data->input1.",`heading_2`=".$data->input2.",`heading_3`=".$data->input3.",`heading_4`=".$data->input4.",`heading_5`=".$data->input5." WHERE id=".$data->id;
			if(mysqli_query($con,$sql)){
				echo json_encode("1");
			}else{
				echo json_encode("0");
			}
	
		}else{		
		
			$sql="SELECT * FROM dashboard";
			$result=mysqli_query($con,$sql);
			$searchData = array();
			while ($row=mysqli_fetch_array($result)) {
				# code...
				$searchData[] = $row;
			}
			//returning response in JSON format
			echo json_encode($searchData);
		
		}
	}
	
	
?>