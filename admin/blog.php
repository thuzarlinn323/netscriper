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
                <?php
                    if (isset($_GET['source'])) {
                         $source = $_GET['source'];
                     }else{
                        $source = '';
                     }

                     switch ($source) {
                         case 'add_blog':
                            include_once "admin_layout/add_blog.php";
                             break;

                          case 'edit_blog':
                             include_once "admin_layout/edit_blog.php";
                            break;

                          case '30':
                             echo "30";
                             break;
                         
                         default:
                             include_once "admin_layout/view_all_blog.php";
                             break;
                     }
                 ?>
                </div>
                <!-- /.row -->

            <?php include_once "admin_layout/footer.php" ?>
