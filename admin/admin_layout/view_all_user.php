<div class="col-md-12">
                    <table class="table table-hover table-bordered table-responsive">
                        <tr>
                            <th>ID</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Admin Role</th>
                            <th>User Role</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $query ="SELECT * FROM users"; 
                            $result = mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $user_id = $row['user_id'];
                                $user_name = $row['user_name'];
                                $user_email = $row['user_email'];
                                $user_role = $row['user_role'];

                               

                                

                                 
                                echo " <tr>
                                            <td>$user_id</td>
                                            <td>$user_name </td>
                                            <td>$user_email</td>
                                            <td>$user_role</td>
                                            <td><a href='user.php?admin=$user_id' class='btn btn-success'>Admin</a></td>
                                            <td><a href='user.php?user=$user_id' class='btn btn-primary'>User</a></td>
                                            <td><a href='user.php?source=edit_user&edit_id=$user_id' class='btn btn-warning'>Update</a></td>
                                            <td><a href='user.php?delete=$user_id' class='btn btn-danger'>Delete</a></td>
                                        </tr>";
                                       
                               
                                
                               
                            }
                         ?>

                    </table>
                </div>

                <?php
                    if (isset($_GET['delete'])) {
                        if (isset($_SESSION['user_role'])== 'admin') {
                             $delete_id = $_GET['delete'];

                             $query = "DELETE FROM users WHERE user_id=$delete_id";
                             mysqli_query($connect,$query);
                             header('Location:user.php');
                        }
                      
                     } 

                        if (isset($_GET['admin'])) {
                         $admin_id = $_GET['admin'];

                         $query = "UPDATE users SET user_role='admin' WHERE user_id=$admin_id";
                         mysqli_query($connect,$query);
                         header('Location:user.php');
                     }

                       if (isset($_GET['user'])) {
                         $user_id = $_GET['user'];

                         $query = "UPDATE users SET user_role='user' WHERE user_id=$user_id";
                         mysqli_query($connect,$query);
                        header('Location:user.php');
                     }
                 ?>
                 