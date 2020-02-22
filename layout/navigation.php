 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Institute Project</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                        $query ="SELECT * FROM categories LIMIT 4";
                        $result = mysqli_query($connect,$query);
                        foreach ($result as $data) {
                        ?> 

                        <li>
                            <a href="category.php?category_id=<?php echo $data['cat_id'] ?>"><?php echo $data['cat_title']; ?></a>
                        </li>
                        <?php  
                        }
                        ?>


                        <li>
                            <a href="register.php">Register</a>
                        </li>

                         <li>
                            <a href="contact.php">Contact</a>
                        </li>


                    <?php 
                        if (isset($_SESSION['user_role'])) {
                           if ($_SESSION['user_role'] == 'admin') {
                            echo    "<li>
                                        <a href='admin/index.php'>Admin</a>
                                    </li>";
                           }
                        }
                        
                        
                     ?>

                     
                    
            
                   <!--  <li>
                        <a href="#">Contact</a>
                    </li>  -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
   