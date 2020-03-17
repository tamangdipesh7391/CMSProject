<?php
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
	if (isset($_POST['submit'])) {
		if ($_POST['submit']=='submit') {
	
			$filename = $_FILES['image']['name'];
			$tmp_name = $_FILES['image']['tmp_name'];
			$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		      && $imageFileType != "gif" && $imageFileType!="") {
		          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

		          
		      }else{
		        $location='C:\xampp\htdocs\FreePaid\assets\post-img-pre'.'/'.$filename;
		        move_uploaded_file($tmp_name, $location);//upload file
		        array_pop($_POST);//popping submit form post

		        $_POST['post_img']=$filename;//insert filename in post variable
		        $obj->Insert("premium_product",$_POST);//insert query
		        $_SESSION['true']="Students added successfully!";
		      }
			
		}
	}


?>


<div class="container">
	<div class="post-heading">
		<h2>Post Your Stuff Here</h2>

	</div>
	<div class="col-md-5">
		<form action="" method="post" class="form-group" enctype="multipart/form-data">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="post_heading" class="form-control">
			</div>
			<div class="form-group">
				<label>Thumbnail Image</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="form-group">
				<label>Estimated Amount</label>
				<input type="number" name="price" class="form-control">
			</div>
			<div class="form-group">
				<label>Date</label>
				<input type="date" name="date" class="form-control">
			</div>
			<button class="btn btn-success" name="submit" value="submit"> Post </button>
		</form>
	</div>
</div>