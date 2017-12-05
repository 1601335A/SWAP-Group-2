

<!DOCTYPE html>
<html>
	<head>
		<title>Insert</title>
	</head>

	
<body>


	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center">
		
			<tr>
				<td><h2>New Table</h2></td>
			</tr>
			
			<tr>
				<td>Product Title:</td>
				<td><input type="text" name="title" size="60" required/></td>
			</tr>
			<tr>
				<td>Product Description:</td>
				<td><textarea name="description" cols="20" rows="10" required></textarea></td>
			</tr>
			<tr>
				<td>Product Image:</td>
				<td><input type="file" name="image"required/></td>
			</tr>
			<tr>
			<tr>
				<td>Category:</td>
				<td>
					<select name="category_id">
						<option>Select a Category</option>
						<?php
							$con = mysqli_connect("localhost","root","","aschente");

							
								global $con;
								$get_cats = "select * from categories";
								$run_cats = mysqli_query($con, $get_cats);
								
								while ($row_cats=mysqli_fetch_array($run_cats)){
									$cat_id = $row_cats['id'];
									$cat_name = $row_cats['name'];
									
									
									echo "<option value='$cat_id'>$cat_name</option>";
	}

						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Price:</td>
				<td><input type="text" name="price" required/></td>
			</tr>
			<tr>
				<td colspan"8"><input type="submit" name="insert_post" value="Submit"/></td>
			</tr>
		</table>
	</form>
	
	
</body>
</html>

<?php

	if(isset($_POST['insert_post'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$category_id = $_POST['category_id'];
		
		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($image_tmp,"product_images/$image");
		
		$insert_product = "insert into products (category_id,title,price,description,image) values ('$category_id','$title','$price','$description','$image')";
		
		$insert_product = mysqli_query($con, $insert_product);
		

		
	}
?>