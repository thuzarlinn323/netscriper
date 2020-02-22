<?php 
 	include_once "../database.php";
 	session_start();   //twar mk file mr pr twar htae pay

 	if (isset($_POST['login'])) {
 		 $email = $_POST['email'];
 		 $password = $_POST['password'];

 		 $email = mysqli_real_escape_string($connect,$email);  //sr thr dy ko htote pay dr
 		 $password = mysqli_real_escape_string($connect,$password);
 		
 		$query = "SELECT * FROM users WHERE user_email = '$email'"; //coloum name
 		$result = mysqli_query($connect,$query);
 		while ($row = mysqli_fetch_assoc($result)) {
 			$db_name = $row['user_name'];
 			$db_email = $row['user_email'];
 			$db_password = $row['user_password'];
 			$db_role = $row['user_role'];
 		}

 		if ($email !== $db_email && $password !== $db_password) {
 			header('Location:../index.php');
 		}else if ($email == $db_email && $password == $db_password) {
 			$_SESSION['user_name'] = $db_name;
 			$_SESSION['user_password'] = $db_password;
 			$_SESSION['user_email'] = $db_email;
 			$_SESSION['user_role'] = $db_role;
 			header('Location:../admin/index.php');
 		}else{
 			header('Location:../index.php');	
 		}
 	}
 	
 ?>