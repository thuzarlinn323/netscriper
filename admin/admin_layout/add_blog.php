<?php
	if (isset($_POST['add_blog'])) {
	 	 $blog_title = $_POST['blog_title'];
	 	 $blog_category_id = $_POST['blog_category_id'];
	 	 $blog_author = $_POST['blog_author'];
	 	 $blog_status = $_POST['blog_status'];

	 	 $blog_image = $_FILES['blog_image']['name'];
	 	 $blog_image_temp = $_FILES['blog_image']['tmp_name'];  //key
	 	 move_uploaded_file($blog_image_temp, '../images/' . $blog_image);

	 	 $blog_tag = $_POST['blog_tag'];
	 	 $blog_content = $_POST['blog_content'];
	 	 $blog_date = date('Y-m-d');
	 	 $blog_comment_count = 0;
	 	 $blog_view_count = 0;


	 	 $query = "INSERT INTO `blogs`( `blog_category_id`, `blog_title`, `blog_author`, `blog_date`, `blog_image`, `blog_content`, `blog_tag`, `blog_comment_count`, `blog_status`, `blog_view_count`) VALUES ($blog_category_id,'$blog_title','$blog_author','$blog_date','$blog_image','$blog_content','$blog_tag',$blog_comment_count,'$blog_status',$blog_view_count)";
	 	
	 	 mysqli_query ($connect,$query);
	 	 echo "Create Successfully <a href='blog.php' class='btn btn-success'>View All Blog</a>";
	 } 
 ?>

<form action="" method="post" enctype="multipart/form-data">   <!-- for image -->
	<div class="form-group">
		<label for="" class="control-label">Blog Title</label>
		<input type="text" class="form-control" name="blog_title">
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
		<input type="text" class="form-control" name="blog_author">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Status</label>
		<!-- <input type="text" class="form-control" name="blog_status"> -->
		<select name="blog_status" class="form-control" id="">
			<option value="">--Select Status--</option>
			<option value="public">Public</option>
			<option value="hide">Hide</option>
		</select>
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Image</label>
		<input type="file" name="blog_image">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Tag</label>
		<input type="text" class="form-control" name="blog_tag">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Blog Content</label>
		<textarea name="blog_content" class="form-control" id="editor" cols="30" rows="10"></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-success" name="add_blog" value="Add New Blog">
	</div>

</form>

