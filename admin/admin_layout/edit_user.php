<?php
	if (isset($_GET['edit_id'])) {
	 	$edit_id=$_GET['edit_id'];

	 	$query ="SELECT * FROM users WHERE user_id=$edit_id"; 
                            $result = mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $user_id = $row['user_id'];
                                $user_name = $row['user_name'];
                                $user_password = $row['user_password'];
                                $user_email = $row['user_email'];
                                $user_role = $row['user_role'];
                               
                                       
                               
                                
                               
                            }
				} 
 ?>

 <?php
	if (isset($_POST['update'])) {
	 	 $name = $_POST['name'];
	 	 $password = $_POST['password'];
	 	 $password = password_hash($password,true);
	 	 $email = $_POST['email'];
	 	 $role = $_POST['role'];

	 	

	 	 $query = "UPDATE `users` SET `user_name`=$name,`user_password`='$password',`user_email`='$email',`user_role`='$role' WHERE user_id = $edit_id";
	 	
	 	 $result = mysqli_query ($connect,$query);
	 	 if (!$result) {
	 	 	die("Query Failed");
	 	 }
	 	 echo "Update Successfully <a href='blog.php' class='btn btn-success'>View All User</a>";
	 } 
 ?>


<form action="" method="post" enctype="multipart/form-data">   <!-- for image -->
	<div class="form-group">
		<label for="" class="control-label">Name</label>
		<input type="text" class="form-control" name="name" value="<?php echo $user_name ?>">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Password</label>
		<input type="text" class="form-control" name="user_password" value="<?php echo $user_password ?>> 
		
	</div>

	<div class="form-group">
		<label for="" class="control-label">Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $user_email ?>">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Role</label>
		<input type="text" class="form-control" name="role" value="<?php echo $user_role ?>">
	</div>



	<div class="form-group">
		<input type="submit" class="btn btn-success" name="update" value="Update Blog">
	</div>

</form>