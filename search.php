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
                            if(isset($_POST['search'])){
                                 $search = $_POST['search_name'];
                                 $query = "SELECT * FROM blogs WHERE blog_tag LIKE '%$search%'";
                                 $result = mysqli_query($connect,$query);
                                 $count = mysqli_num_rows($result);  //num_rows=>yay twat tr
                                 if ($count >0) {
                                     // $query = "SELECT * FROM blogs"; 
                    // $result =mysqli_query($connect,$query);
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
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                                 
                        
                   

                <?php
                    } 

                    }else{
                                    echo "No Result";
                                 }
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
