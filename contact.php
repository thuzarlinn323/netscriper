<?php include_once "layout/header.php" ?>
<?php include_once "database.php" ?>
    <!-- Navigation -->
   <?php include_once "layout/navigation.php" ?>

   <?php 
        // the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// mail("someone@example.com","My subject",$msg);
    
    if (isset($_POST['submit'])) {
          $to = 'swamhtetnaing.cu@gmail.com';
          $subject = $_POST['subject'];
          $body = $_POST['body'];
          $email = $_POST['email'];

           mail("$to",$subject,$body,$email);
      }
    ?>

    <!-- Page Content -->
    <div class="container">

       <section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Contact Form</h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">Subject</label>
                            <input type="text" name="subject" id="username" class="form-control" placeholder="Enter Subject" required="">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required="">
                        </div>
                         <div class="form-group">
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Contact">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

        <hr>

        <!-- Footer -->
<?php include_once "layout/footer.php" ?>
