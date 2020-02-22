<?php 
    if (isset($_POST['checkboxarray'])) {
        foreach ($_POST['checkboxarray'] as $checkbox_value) {
            $option = $_POST['option'];
            switch ($option) {
                case 'public':
                    $query = "UPDATE `blogs` SET `blog_status`='$option' WHERE blog_id=$checkbox_value";
                    mysqli_query($connect,$query);
                    break;

                case 'hide':
                    $query = "UPDATE `blogs` SET `blog_status`='$option' WHERE blog_id=$checkbox_value";
                    mysqli_query($connect,$query);
                    break;

                case 'delete';
                    $query = "DELETE FROM `blogs` WHERE blog_id=$checkbox_value";
                    mysqli_query($connect,$query);
                    break;
                
                case 'clone';
                    $query = "SELECT * FROM `blogs` WHERE blog_id=$checkbox_value";
                    $result = mysqli_query($connect,$query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $blog_id = $row['blog_id'];
                        $blog_author = $row['blog_author'];
                        $blog_title = $row['blog_title'];
                        $blog_category_id = $row['blog_category_id'];
                        $blog_status = $row['blog_status'];
                        $blog_image = $row['blog_image'];
                        $blog_tag = $row['blog_tag'];
                        $blog_comment_count = $row['blog_comment_count'];
                        $blog_content = $row['blog_content'];
                        $blog_date = $row['blog_date'];
                    }
                        $query = "INSERT INTO `blogs`(`blog_category_id`, `blog_title`, `blog_author`, `blog_date`, `blog_image`, `blog_content`, `blog_tag`, `blog_status`) VALUES ('$blog_category_id','$blog_title','$blog_author',now(),'$blog_image','$blog_content','$blog_tag','$blog_status')";
                        mysqli_query($connect,$query);

                    break;
            }
        }
    }
 ?>
<div class="col-md-12">
    <form action="" method="post">
        <div class="col-xs-4 form-group">
            <select name="option" id="" class="form-control">
                <option value="">-- Seclect Option --</option>
                <option value="public">Public</option>
                <option value="hide">Hide</option>
                <option value="delete">Delete</option>
                <option value="clone">Clone</option>
            </select>
        </div>
        <div class="form-group col-xs-2">
            <input type="Submit" name="apply" value="Apply" class="btn btn-primary">
         </div>   
        <table class="table table-hover table-bordered table-responsive">
                        <tr>
                            <th><input type="checkbox" id="selectallbox"></th>      
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Comments</th>
                            <th>Status</th>
                            <th>View Count</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $query ="SELECT * FROM blogs"; 
                            $result = mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $blog_id = $row['blog_id'];
                                $blog_category_id = $row['blog_category_id'];
                                $blog_title = $row['blog_title'];
                                $blog_author = $row['blog_author'];
                                $blog_date = $row['blog_date'];
                                $blog_image = $row['blog_image'];
                                $blog_tag = $row['blog_tag'];
                                $blog_comment_count = $row['blog_comment_count'];
                                $blog_status = $row['blog_status'];
                                $blog_view_count = $row['blog_view_count'];

                                $cat_query = "SELECT * FROM categories WHERE cat_id=$blog_category_id";
                                $cat_result = mysqli_query($connect,$cat_query);
                                while ($row=mysqli_fetch_assoc($cat_result)) {
                                    $cat_title = $row['cat_title'];
                                }

                                 
                                echo " <tr>
                                            <td><input type='checkbox' class='check_box' name='checkboxarray[]' value='{$blog_id}'></td>  <!-- a myar gyi swal htoe mr ma loc name ko array[] use -->
                                            <td>$blog_id</td>
                                            <td>$cat_title </td>
                                            <td>$blog_title</td>
                                            <td>$blog_author</td>
                                            <td>$blog_date</td>
                                            <td><img src='../images/$blog_image' width='120px' class='img-responsive' alt=''></td>
                                            <td>$blog_tag</td>
                                            <td>$blog_comment_count</td>
                                            <td>$blog_status</td>
                                            <td><a href='blog.php?reset=$blog_id'>$blog_view_count</a></td>
                                            <td><a href='blog.php?source=edit_blog&edit_id=$blog_id' class='btn btn-warning'>Update</a></td>
                                            <td><a onclick= \" javaScript:return confirm('Are U Sure U Want To Delete'); \"href='blog.php?delete=$blog_id' class='btn btn-danger'>Delete</a></td>
                                        </tr>";
                                       
                               
                                
                               
                            }
                         ?>

            </table>
    </form>
                    
                </div>

                <?php
                    if (isset($_GET['delete'])) {
                        if (isset($_SESSION['user_role'])=='admin') {
                            $delete_id =mysqli_real_escape_string($connect, $_GET['delete']);

                            $query = "DELETE FROM users WHERE user_id=$delete_id";
                            mysqli_query($connect,$query);
                            header('Location:user.php');
                        }
                       
                     } 

                     if (isset($_GET['reset'])) {
                        $reset_id = $_GET['reset'];

                        $query = "UPDATE blogs SET blog_view_count=0 WHERE blog_id=$reset_id";
                        mysqli_query($connect,$query);
                        header('Location:blog.php');
                     }
                 ?>