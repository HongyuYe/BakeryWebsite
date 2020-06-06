<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phn'];
		$msg = $_POST['msg'];
		
	
		if(empty($name)){
			echo "<script>alert('name is required')</script>";
		}
		else if(empty($email)){
			echo "<script>alert('email is required')</script>";
			exit;
		}
		elseif(empty($phone)){
			echo "<script>alert('mobile is required')</script>";
			exit;
		}

		elseif(empty($msg)){
			echo "<script>alert('write your message')</script>";
			exit;
		}else{

		include 'connection.php';

		$sql = mysqli_query($conn,"insert into contact(Email, name, phone, message) values('$id','$name','$email','$pass','$prod','$dob')");
		if($sql){
			header("location:contact.html")
		}else{
			echo "error".mysqli_error($conn);
		}
		}
		
	}
?>