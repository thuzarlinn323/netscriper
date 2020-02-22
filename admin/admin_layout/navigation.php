<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">CMS Institute Project</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                    

                <li><a href="#">User Online : <?php echo @$onlineuser_count; ?></a></li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user_name']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="admin_layout/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#blog"><i class="fa fa-fw fa-arrows-v"></i> Blogs <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="blog" class="collapse">
                            <li>
                                <a href="blog.php">View All Blogs</a>
                            </li>
                            <li>
                                <a href="blog.php?source=add_blog">Add New Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="add_categories.php"><i class="fa fa-fw fa-wrench"></i>Category Detail</a>
                    </li>
                    <li class="">
                        <a href="comment.php"><i class="fa fa-fw fa-file"></i> Commemts</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-arrows-v"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="user.php">View All Users</a>
                            </li>
                            <li>
                                <a href="user.php?source=add_user">Add New User</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        