<?php include_once "admin_layout/header.php" ?>
<?php include_once "admin_layout/function.php" ?>



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
                      insert_category();
                     ?>
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="" class="control-label">Add Category</label>
                                <input type="text" class="form-control" name="cat_title" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="category_insert" class="btn btn-success" value="Add Category">
                            </div>
                        </form><br><br>
                        
                        <?php
                            if (isset($_GET['update'])) {
                                 $update_id = $_GET['update'];
                                 $query ="SELECT * FROM categories WHERE cat_id=$update_id";
                                 $result = mysqli_query($connect,$query);
                                 while ($row=mysqli_fetch_assoc($result)) {
                                     $cat_title = $row['cat_title'];

                            if (isset($_POST['category_edit'])) {
                                $cat_title = $_POST['cat_title'];
                                $query ="UPDATE categories SET cat_title='$cat_title' WHERE cat_id=$update_id";
                                mysqli_query($connect,$query);
                                header("Location:add_categories.php");
                            }

                        ?>

                       

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="" class="control-label">Update Category</label>
                                <input type="text" class="form-control" name="cat_title" required="" value="<?php echo $cat_title; ?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="category_edit" class="btn btn-primary" value="Update Category">
                            </div>
                        </form> 
                          
                          <?php
                                 }
                             } 
                        ?>                      

                    </div>

                    <div class="col-md-6">
                        <table class="table table-bordered table-hover table-responsive">
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                                $query ="SELECT * FROM categories "; 
                                $result = mysqli_query($connect,$query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $cat_id =$row['cat_id'];
                                    $cat_title = $row['cat_title'];
                                
                             ?>
                            <tr>
                                <td><?php echo $cat_id; ?></td>
                                <td><?php echo $cat_title; ?></td>
                                <td><a href="add_categories.php?update=<?php echo $cat_id ?>" class="btn btn-warning">Update</a></td>
                                <td><a href="add_categories.php?delete=<?php echo $cat_id ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                                } 
                             ?>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            <?php include_once "admin_layout/footer.php" ?>

            <?php
                delete_category();
             ?>
