<?php include_once "admin_layout/header.php" ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once"admin_layout/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

               
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome To Admin Panel
                            <small><?php echo $_SESSION['user_name']; ?></small>
                        </h1>
                        
                    </div>


<?php 
    if (isset($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
        $user_email = $_SESSION['user_email'];
    }
    $query = "SELECT * FROM users WHERE user_name='$user_name'";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_assoc($result)) {
       $user_id = $row['user_id'];
       $user_name = $row['user_name'];
       $user_email = $row['user_email'];
       $user_password = $row['user_password'];
       $user_role = $row['user_role'];
    }

    if (isset($_POST['update_profile'])) {
       $user_name = $_POST['name'];
       $user_email = $_POST['email'];
       $user_role = $_POST['role'];
       $user_password = $_POST['password'];
       $userpassword = password_hash($user_password,true);

       $query = "UPDATE `users` SET `user_name`='$user_name',`user_password`='$user_password',`user_email`='$user_email',`user_role`='$user_role' WHERE user_email = '$user_email'";
       mysqli_query($connect,$query);
       
       header('Location:admin_layout/logout.php');
    }

   
?>
    <div class="row">
    <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">   <!-- for image -->
    <div class="form-group">
        <label for="" class="control-label">Name</label>
        <input type="text" class="form-control" name="name" required="" value="<?php echo $user_name; ?>" >
    </div>

    

    <div class="form-group">
        <label for="" class="control-label">Email</label>
        <input type="email" class="form-control" name="email" required="" value="<?php echo $user_email; ?>">
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
        <input type="password" class="form-control" name="password" required="" value="<?php echo $user_password; ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" name="update_profile" value="Update Profile">
    </div>

</form>
                      </div>
                  </div>
                </div>
                <!-- /.row -->

            <?php include_once "admin_layout/footer.php" ?>

