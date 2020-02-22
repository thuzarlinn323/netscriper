<?php include_once "admin_layout/header.php" ?>


    <div id="wrapper">
        <?php 
            $session = session_id();
            $time = time();
            $time_out_second = 60;
            $time_out = $time - $time_out_second;


            $query = "SELECT * FROM online_user WHERE session='$session'";
            $session_result = mysqli_query($connect,$query);
            $session_count = mysqli_num_rows($session_result);
            if ($session_count == NULL) {
                mysqli_query($connect,"INSERT INTO `online_user`(`session`, `time`) VALUES ('$session',$time)");
            }else{
                mysqli_query($connect,"UPDATE `online_user` SET `session`='$session',`time`=$time WHERE session = '$session'");
            }

            $onlineuser_query = mysqli_query($connect,"SELECT * FROM `online_user` WHERE time>'$time_out'");
            $onlineuser_count = mysqli_num_rows($onlineuser_query);
         ?>

        <!-- Navigation -->
        <?php include_once"admin_layout/navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

               
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome To Admin Panel
                            <small><?php echo $_SESSION['user_name'];
                                
                             ?></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->



                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 
                            $query = "SELECT * FROM blogs";
                            $result = mysqli_query($connect,$query);
                            $blog_count = mysqli_num_rows($result);
                            echo " <div class='huge'>{$blog_count}</div>";
                         ?>

                         <?php 
                            $public_query = "SELECT * FROM blogs WHERE blog_status = 'public'";
                            $public_result = mysqli_query($connect,$public_query);
                            $public_count = mysqli_num_rows($public_result);

                            $hide_query = "SELECT * FROM blogs WHERE blog_status = 'hide'";
                            $hide_result = mysqli_query($connect,$hide_query);
                            $hide_count = mysqli_num_rows($hide_result);
                          ?>
                 
                        <div>Blogs</div>
                    </div>
                </div>
            </div>
            <a href="blog.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 
                            $query = "SELECT * FROM comments";
                            $result = mysqli_query($connect,$query);
                            $comment_count = mysqli_num_rows($result);
                            echo " <div class='huge'>{$comment_count}</div>";
                         ?>
                    <!--  <div class='huge'>23</div> -->
                    <?php 
                        $approve_query = "SELECT * FROM comments WHERE comment_status = 'approve'";
                        $approve_result = mysqli_query($connect,$approve_query);
                        $approve_count = mysqli_num_rows($approve_result);

                        $unapprove_query = "SELECT * FROM comments WHERE comment_status = 'unapprove'";
                        $unapprove_result = mysqli_query($connect,$unapprove_query);
                        $unapprove_count = mysqli_num_rows($unapprove_result);

                     ?>

                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comment.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                         <?php 
                            $query = "SELECT * FROM users";
                            $result = mysqli_query($connect,$query);
                            $user_count = mysqli_num_rows($result);
                            echo " <div class='huge'>{$user_count}</div>";
                         ?>

                         <?php 
                            $admin_query = "SELECT * FROM users WHERE user_role = 'admin'";
                            $admin_result = mysqli_query($connect,$admin_query);
                            $admin_count = mysqli_num_rows($admin_result);

                            $user_query = "SELECT * FROM users WHERE user_role = 'user'";
                            $user_result = mysqli_query($connect,$user_query);
                            $user_count = mysqli_num_rows($user_result);



                          ?>
                    <!-- <div class='huge'>23</div> -->
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="user.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                         <?php 
                            $query = "SELECT * FROM categories";
                            $result = mysqli_query($connect,$query);
                            $category_count = mysqli_num_rows($result);
                            echo " <div class='huge'>{$category_count}</div>";
                         ?>
                        <!-- <div class='huge'>13</div> -->
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="add_categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->

        <div class="row">
            <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Counts'],
          ["Public Blogs", <?php echo $public_count; ?>],
          ["Hide Blogs", <?php echo $hide_count; ?>],
          ["Approve Comments", <?php echo $approve_count; ?>],
          ["Unapprove Comments", <?php echo $unapprove_count; ?>],
          ["Admin", <?php echo $admin_count; ?>],
          ["User", <?php echo $user_count; ?>],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'GHI Institute',
            subtitle: 'popularity by counts' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
            </script>
             <div id="top_x_div" style="width: 800px; height: 600px;"></div>
        </div>

            <?php include_once "admin_layout/footer.php" ?>
