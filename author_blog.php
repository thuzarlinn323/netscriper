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
                    if (isset($_GET['author'])) {
                        $author = $_GET['author'];
                        $blog_id = $_GET['blog_id'];
                       
                    }else{
                        header('Location:index.php');
                    }

                    $query = "SELECT * FROM blogs WHERE blog_author='$author'"; 
                    $result =mysqli_query($connect,$query);
                    while ($row=mysqli_fetch_assoc($result)) {

                        $blog_id = $row['blog_id'];
                        $blog_title = $row['blog_title'];
                        $blog_author= $row['blog_author'];
                        $blog_date= $row['blog_date'];
                        $blog_image= $row['blog_image'];
                        $blog_content=substr($row['blog_content'],0,150) . '........' ;
                        
                 ?>

                <p class="lead text-primary">
                    All Blog By <?php echo $blog_author; ?>
                </p>


                <!-- First Blog Post -->
                <h2>
                    <a href="blog.php?blog_id=<?php echo $blog_id; ?>"><?php echo $blog_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $blog_author; ?></a>
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
