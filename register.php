<?php include_once "layout/header.php" ?>
<?php include_once "database.php" ?>
    <!-- Navigation -->
   <?php include_once "layout/navigation.php" ?>

   <?php 
    if (isset($_POST['submit'])) {
       $username = $_POST['username'];
       $useremail = $_POST['useremail'];
       $userpassword = $_POST['userpassword'];

       $username = mysqli_real_escape_string($connect,$username);
       $useremail = mysqli_real_escape_string($connect,$useremail);
       $userpassword = mysqli_real_escape_string($connect,$userpassword);

       $userpassword = password_hash($username,true);
       $query = "INSERT INTO `users`(`user_name`, `user_password`, `user_email`, `user_role`) VALUES ('$username','$userpassword','$useremail','user')";
       mysqli_query($connect,$query);
       echo "Successfully Your Account";
        }
    ?>

    <!-- Page Content -->
    <div class="container">

       <section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="register.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username" required="">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="useremail" id="email" class="form-control" placeholder="somebody@example.com" required="">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="userpassword" id="key" class="form-control" placeholder="Password" required="">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

        <hr>

        <!-- Footer -->
<?php include_once "layout/footer.php" ?>
