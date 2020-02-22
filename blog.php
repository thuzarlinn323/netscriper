<?php include_once "layout/header.php" ?>
<?php include_once "database.php" ?>
    <!-- Navigation -->
   <?php include_once "layout/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                    if (isset($_GET['blog_id'])) {
                        $blog_id = $_GET['blog_id'];
                        $view_query = "UPDATE blogs SET blog_view_count=blog_view_count+1 WHERE blog_id=$blog_id";
                        mysqli_query($connect,$view_query);
                    }else{
                        header('Location:index.php');
                    }

                    $query = "SELECT * FROM blogs WHERE blog_id=$blog_id"; 
                    $result =mysqli_query($connect,$query);
                    while ($row=mysqli_fetch_assoc($result)) {
                        $blog_title = $row['blog_title'];
                        $blog_author= $row['blog_author'];
                        $blog_date= $row['blog_date'];
                        $blog_image= $row['blog_image'];
                        $blog_content= $row['blog_content'];
                        
                 ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $blog_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $blog_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $blog_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $blog_image; ?>" alt="">
                <hr>
                <p><?php echo $blog_content; ?></p>
                

                <hr>

                <?php
                    } 
                 ?>

                    <!-- Blog Comments -->
                    <?php
                        if (isset($_POST['create_comment'])) {
                           $comment_author = $_POST['comment_author'];
                           $comment_email = $_POST['comment_email'];
                           $comment_content = $_POST['comment_content'];

                           $query = "INSERT INTO `comments`(`comment_blog_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES ($blog_id,'$comment_author','$comment_email','$comment_content','unapprove',now())";
                           mysqli_query($connect,$query);

                           $query = "UPDATE blogs SET blog_comment_count=blog_comment_count+1 WHERE blog_id= $blog_id";
                           mysqli_query($connect,$query);
                         } 
                     ?>

                   <!--  Comments Form -->
                  <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="post">
                        <div class="form">
                            <input type="text" name="comment_author" class="form-control" placeholder="Enter Your Name" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="comment_email" class="form-control" placeholder="Enter Your Email" required="">
                        </div>
                        <div class="form-group">
                             <textarea name="comment_content" class="form-control" rows="3" required=""></textarea>
                            
                        </div>
                        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <?php
                    $query = "SELECT * FROM comments WHERE comment_blog_id=$blog_id AND comment_status='approve' ORDER BY comment_id DESC";
                    $result = mysqli_query($connect,$query);
                    while ($row=mysqli_fetch_assoc($result)) {
                        $comment_author = $row['comment_author'];
                        $comment_date = $row['comment_date'];
                        $comment_content = $row['comment_content'];


                 ?>

                <!-- Comment -->
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small><?php echo $comment_date; ?></small>
                        </h4>
                       <?php echo $comment_content; ?>
                    </div>
                </div>
                <?php
                     } 
                ?>

                

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <?php include_once "layout/sidebar.php" ?>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include_once "layout/footer.php" ?>


