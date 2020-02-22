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
                            <small>AuthorName</small>
                        </h1>
                        
                    </div>
               <div class="col-md-12">
                    <table class="table table-hover table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>From Title</th>
                            <th>Date</th>
                            <th>Approve</th>
                            <th>Unapprove</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $query = "SELECT * FROM comments"; 
                            $result = mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $comment_id = $row['comment_id'];
                                $comment_blog_id = $row['comment_blog_id'];
                                $comment_author = $row['comment_author'];
                                $comment_email = $row['comment_email'];
                                $comment_content = $row['comment_content'];
                                $comment_status = $row['comment_status'];
                                $comment_date = $row['comment_date'];

                                $query = "SELECT * FROM blogs WHERE blog_id=$comment_blog_id";
                                $select_result = mysqli_query($connect,$query);
                                while ($row = mysqli_fetch_assoc($select_result)) {
                                  $blog_id = $row['blog_id'];
                                  $blog_title = $row['blog_title'];
                               
                                echo " <tr>
                                            <td>$comment_id</td>
                                            <td>$comment_author</td>
                                            <td>$comment_email</td>
                                            <td>$comment_content</td>
                                            <td>$comment_status</td>
                                            <td><a href='../blog.php?blog_id=$blog_id'>{$blog_title}</a></td>
                                            <td>$comment_date</td>
                                            <td><a href='comment.php?approve=$comment_id' class='btn btn-success'>Approve</a></td>
                                            <td><a href='comment.php?unapprove=$comment_id' class='btn btn-danger'>Unapprove</a></td>
                                            <td><a href='comment.php?delete_id=$comment_id' class='btn btn-primary'>Delete</a></td>

                                        </tr>";                                     
                                    }
                                }
                                                          
                         ?>

                    </table>
                </div>

                <?php
                    if (isset($_GET['delete_id'])) {
                       $delete_id = $_GET['delete_id'];

                       $query = "DELETE FROM comments WHERE comment_id=$delete_id";
                        mysqli_query($connect,$query);
                        header('Location:comment.php');
                     } 


                     if (isset($_GET['approve'])) {
                         $approve_id = $_GET['approve'];

                         $query = "UPDATE comments SET comment_status='approve' WHERE comment_id=$approve_id";
                         mysqli_query($connect,$query);
                         header('Location:comment.php');
                     }

                      if (isset($_GET['unapprove'])) {
                         $unapprove_id = $_GET['unapprove'];

                         $query = "UPDATE comments SET comment_status='unapprove' WHERE comment_id=$unapprove_id";
                         mysqli_query($connect,$query);
                        header('Location:comment.php');
                     }
                 ?>

                </div>
                <!-- /.row -->

            <?php include_once "admin_layout/footer.php" ?>
