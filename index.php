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
                    $par_page = 5;

                    if (isset($_GET['page'])) {
                       $page = $_GET['page'];
                    }else{
                        $page = '';
                    }

                    if ($page == '' || $page == 1) {
                       $page_one = 0;
                    }else{
                        $page_one = ($page * 5)-5;
                    }


                    $query = "SELECT * FROM blogs WHERE blog_status='public'"; 
                    $fine_count = mysqli_query($connect,$query);
                    $count = mysqli_num_rows($fine_count);
                    $count = ceil($count/5);

                    $query = "SELECT * FROM blogs WHERE blog_status='public' ORDER BY blog_id DESC LIMIT $page_one,$par_page";  //front ka bl ka sa dr ko pya
                    $result =mysqli_query($connect,$query);
                    while ($row=mysqli_fetch_assoc($result)) {

                        $blog_id = $row['blog_id'];
                        $blog_title = $row['blog_title'];
                        $blog_author= $row['blog_author'];
                        $blog_date= $row['blog_date'];
                        $blog_image= $row['blog_image'];
                        $blog_content=substr($row['blog_content'],0,150) . '........' ;
                        
                 ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="blog.php?blog_id=<?php echo $blog_id; ?>"><?php echo $blog_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="author_blog.php?author=<?php echo $blog_author; ?>&blog_id=<?php echo $blog_id ?>"><?php echo $blog_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $blog_date ?></p>
                <hr>
                <a href="blog.php?blog_id=<?php echo $blog_id; ?>"> <img class="img-responsive" src="images/<?php echo $blog_image; ?>" alt=""></a>
               
                <hr>
                <p><?php echo $blog_content; ?></p>
                <a class="btn btn-primary" href="blog.php?blog_id=<?php echo $blog_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <?php
                    } 
                 ?>

               

                <!-- Pager -->
                <ul class="pager">
                   <!--  <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li> -->

                    <?php 
                        for ($i=1; $i <=$count ; $i++) { 
                            if ($i==$page) {
                                echo "<li><a class='active_link' href='index.php?page=$i'>$i</a></li>";
                            }else{
                                echo "<li><a class='' href='index.php?page=$i'>$i</a></li>";
                            }
                            
                        }
                     ?>
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
