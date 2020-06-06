<?php 
	if(isset($_POST['submit'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['pass']);
		$prod = trim($_POST['product']);
		$dob = trim($_POST['dob']);
		
		if(empty($name)){
			echo "<script>alert('name is required')</script>";
		}elseif(empty($email)){
			echo "<script>alert('email is required')</script>";
		}elseif(empty($pass)){
			echo "<script>alert('password is required')</script>";
		}elseif(empty($prod)){
			echo "<script>alert('chose a product of interest')</script>";
		}elseif(empty($dob)){
			echo "<script>alert('D.O.B is required')</script>";
		}else{
			
			//$conn = mysqli_connect('localhost','root','','bakery');
		
			//if (!$conn) {
			    //die("Connection failed: " . mysqli_connect_error());
			//}

			//$sql = mysqli_query($conn,"insert into interest(Name,Email,password,ProductInterest,DOB) values('{$name}','{$email}','{$pass}','{$prod}','{$dob}')");
			?>
				<div class="welcome" style="width:70%; margin:auto; box-shadow: 2px 5px 3px #453; padding:3%;color:green">
					<h1>Thank you for signing up for the Tropical Treats Weekly newsletter.</h1>
					<h2>We have added the following information to our files regarding your interests:</h2>
					<p>Name: <?php echo $name ?></p>
					<p>Email: <?php echo $email ?></p>
					<p>product interest: <?php echo $prod ?></p>
					<p>DOB: <?php echo $dob ?></p>

					<a href="index.html"><button>GO back</button></a>
				</div>
			<?php
			exit;
		}

		echo "<script>window.history.back();</script>";
		exit;
	}
?>