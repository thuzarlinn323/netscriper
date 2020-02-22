<?php
	function insert_category(){
		global $connect;
		if(isset($_POST['category_insert'])) {
            $cat_title = $_POST['cat_title'];
            $query = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";
            mysqli_query($connect,$query);
        }
	} 

	function delete_category(){
		global $connect;   		//a pyin ka kg ko kyay nyar py ya 
		if (isset($_GET['delete'])) {
            if (isset($_SESSION['user_role'])=='admin') {
                $delete_id = $_GET['delete'];

                 $query ="DELETE FROM categories WHERE cat_id =$delete_id";
                 mysqli_query($connect,$query);
                 header("Location:add_categories.php");
            }
            
     	} 
	}
 ?>