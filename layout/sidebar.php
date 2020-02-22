                <div class="well">
                   
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" name="search_name" class="form-control">
                        <span class="input-group-btn">
                            <button type="submit"  name="search" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>

                      <h4>Login Form</h4>
                    <form action="layout/login.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        <span class="input-group-btn">
                            <button type="submit"  name="login" class="btn btn-primary">Login</button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
               

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
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
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>