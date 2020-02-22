<?php
	if (isset($_GET['edit_id'])) {
	 	$edit_id=$_GET['edit_id'];

	 	$query ="SELECT * FROM blogs WHERE blog_id=$edit_id"; 
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
                                $blog_content = $row['blog_content'];
                                
                                       
                               
                                
                               
                            }
	 } 
 ?>

 <?php
	if (isset($_POST['update_blog'])) {
	 	 $blog_title = $_POST['blog_title'];
	 	 $blog_category_id = $_POST['blog_category_id'];
	 	 $blog_author = $_POST['blog_author'];
	 	 $blog_status = $_POST['blog_status'];

	 	 $blog_image = $_FILES['blog_image']['name'];
	 	 $blog_image_temp = $_FILES['blog_image']['tmp_name'];  //key
	 	 move_uploaded_file($blog_image_temp, '../images/' . $blog_image);

	 	 if (empty($blog_image)) {
	 	 	$query = "SELECT * FROM blogs WHERE blog_id=$edit_id";
	 	 	$select_image = mysqli_query($connect,$query);
	 	 	while ($row = mysqli_fetch_assoc($select_image)) {
	 	 		$blog_image = $row['blog_image'];
	 	 	}
	 	 }

	 	 $blog_tag = $_POST['blog_tag'];
	 	 $blog_content = $_POST['blog_content'];
	 	 $blog_date = date('Y-m-d');
	 	 $blog_comment_count = 2;
	 	 $blog_view_count = 4;


	 	 $query = "UPDATE `blogs` SET `blog_category_id`=$blog_category_id,`blog_title`='$blog_title',`blog_author`='$blog_author',`blog_date`='$blog_date',`blog_image`='$blog_image',`blog_content`='$blog_content',`blog_tag`='$blog_tag',`blog_comment_count`=$blog_comment_count,`blog_status`='$blog_status',`blog_view_count`=$blog_view_count WHERE blog_id = $edit_id";
	 	
	 	 $result = mysqli_query ($connect,$query);
	 	 if (!$result) {
	 	 	die("Query Failed");
	 	 }
	 	 echo "Update Successfully <a href='blog.php' class='btn btn-success'>View All Blog</a>";
	 } 
 ?>


<form action="" method="post" enctype="multipart/form-data">   <!-- for image -->
	<div class="form-group">
		<label for="" class="control-label">Blog Title</label>
		<input type="text" class="form-control" name="blog_title" value="<?php echo $blog_title ?>">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Categoty ID</label>
		<!-- <input type="text" class="form-control" name="blog_category_id"> -->
		<select name="blog_category_id" id="" class="form-control">
			<?php
				$query = "SELECT * FROM categories"; 
				$result = mysqli_query($connect,$query);
				while ($row = mysqli_fetch_assoc($result)) {
					$cat_id = $row['cat_id'];
					$cat_title = $row['cat_title'];
					echo "<option value='$cat_id'>$cat_title</option>";
				}
			 ?>
			
		</select>
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Author</label>
		<input type="text" class="form-control" name="blog_author" value="<?php echo $blog_author ?>">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Status</label>
		<!-- <input type="text" class="form-control" name="blog_status" value="<?php echo $blog_status ?>"> -->
		<select name="blog_status" id="" class="form-control">
			<option value="<?php echo $blog_status ?>"><?php echo $blog_status ?></option>
			<?php 
				if ($blog_status == 'public') {
					echo "<option value='hide'>Hide</option>";
				}else{
					echo "<option value='public'>Public</option>";
				}
			 ?>

		</select>
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Image</label>
		<input type="file" name="blog_image">
		<img src="../images/<?php echo $blog_image; ?>" width='120px' class='img-responsive' alt=''>
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Tag</label>
		<input type="text" class="form-control" name="blog_tag" value="<?php echo $blog_tag ?>">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Content</label>
		<textarea name="blog_content" class="form-control" id="editor" cols="30" rows="10"><?php echo $blog_content; ?></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-success" name="update_blog" value="Update Blog">
	</div>

</form>