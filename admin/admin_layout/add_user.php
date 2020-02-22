<?php
	if (isset($_POST['add_user'])) {
	 	 $name = $_POST['name'];
	 	 $email = $_POST['email'];
	 	 $role = $_POST['role'];
	 	 $password = $_POST['password'];
	 	

	 	 $query = "INSERT INTO `users`(`user_name`, `user_password`, `user_email`, `user_role`) VALUES ('$name','$password','$email','$role')";
	 	
	 	 mysqli_query ($connect,$query);
	 	 echo "Create Successfully <a href='user.php' class='btn btn-success'>View All User</a>";
	 } 
 ?>

<form action="" method="post" enctype="multipart/form-data">   <!-- for image -->
	<div class="form-group">
		<label for="" class="control-label">Name</label>
		<input type="text" class="form-control" name="name" required="">
	</div>

	

	<div class="form-group">
		<label for="" class="control-label">Email</label>
		<input type="email" class="form-control" name="email" required="">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Role</label>
		<select name="role" id="" class="form-control">
			<option value="">--Select Role--</option>
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
	</div>

	<div class="form-group">
		<label for="" class="control-label">Password</label>
		<input type="password" class="form-control" name="password" required="">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-success" name="add_user" value="Add New User">
	</div>

</form>

