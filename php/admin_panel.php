<?php
    session_start();
    error_reporting(0);
    if(!$_SESSION['session_is_alive']){
		header("Location:../index.php");
	}else{
        if($_GET['get']){
            $con=mysqli_connect("localhost","root","","naima_web_application_practice");
            $sql="SELECT * FROM food ORDER BY serial DESC";
			$result=mysqli_query($con,$sql);
			$searchData = array();
			while ($row=mysqli_fetch_array($result)) {
				$searchData[] = $row;
			}
			echo json_encode($searchData);
        }else if($_GET['delete']){
            $con=mysqli_connect("localhost","root","","naima_web_application_practice");
            $sql="DELETE FROM food WHERE serial=".$_GET['delete'];
			if(mysqli_query($con,$sql)){
				echo json_encode("1");
			}else{
				echo json_encode("0");
			}
        }else if($_GET['update']){
            $con=mysqli_connect("localhost","root","","naima_web_application_practice");
            $data = json_decode($_GET['update']);
            $sql = "UPDATE `food` SET `name`='".$data->name."',`price`=".$data->price.",`description`='".$data->description."',`type`='".$data->type."' WHERE serial=".$data->serial;
            if(mysqli_query($con,$sql)){
				echo json_encode("1");
			}else{
				echo json_encode("0");
			}
        }else{
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = trim($_POST['name']);
                $price = trim($_POST['price']);
                $description = trim($_POST['description']);
                $type = trim($_POST['type']);
                $image = basename($_FILES["fileToUpload"]["name"]);
                
                echo $name."<br>";
                echo $price."<br>";
                echo $description."<br>";
                echo $type."<br>";
                echo $image."<br>";
        
                if(!empty($name) && !empty($price) && !empty($description) && !empty($type) && !empty($image)){
                    if($price>0){
                        
                        
                        $target_dir = "../images/";
                        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        
                        // Check if image file is a actual image or fake image
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
        
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        }
                        
        
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"  && $imageFileType != "webp") {
                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
        
                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                            header("Location:../views/admin_panel.php");
                        // if everything is ok, try to upload file
                        } else {
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                $con=mysqli_connect("localhost","root","","naima_web_application_practice");
                                $sql="INSERT INTO `food`(`name`, `price`, `description`, `type`, `image`) VALUES ('".$name."',".$price.",'".$description."','".$type."','".basename( $_FILES["fileToUpload"]["name"])."')";
                                if(mysqli_query($con,$sql)){
                                    header("Location:../views/admin_panel.php");
                                }else{
                                    echo "Food Item Insert Error!";
                                }
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
        
                    }else{
                        echo "Price can not be less than 1";
                    }
                }else{
                    header("Location:../views/admin_panel.php");
                }
            }else{
                header("Location:../index.php");
            }   
        }
        
    }

   
    


?>