<?php
include("functions.php");
?>

<html>
	<head>
		<title>Aschente</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
	<!--Connect to MySQL-->
		<?php 
		$con = mysqli_connect("localhost","root","","aschente"); //connect to database
		if (!$con){
			die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
		}
		?>
	
	
	
		<div class="wrapper">
		
		
		
		
			<!-----------------------Header-------------------------->
		
		
			<div class="heading">
				<h1>Aschente</h1>
			</div>
			<!-----------------------Header-------------------------->
			
			
			
			
			<!-----------------------Menu bar-------------------------->
			
			
			<div class="menubar">
				<ul>
				  <li><a class="active" href="index.php">Home</a></li>
				  <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Categories</a>
						<div class="dropdown-content">
							<ul id="Categories">
								<?php getCats(); ?>
								
							<ul>
						</div>
				  </li>
				  <li><a href="contact.php">Contact us</a></li>
				  <li><a href="about.php">About</a></li>
				  
				  

					<li style="float:right"><a class="active" href="login.php">Sign in</a></li>


				  

				  
				  
				</ul>
				
			</div>
			<!-----------------------Menu bar-------------------------->
			
			
			
			
			
			<!-----------------------side bar-------------------------->
			
			
			<!--
			<div class="sidebar">
				sidebar
			</div>
			-->
			<!-----------------------side bar-------------------------->
			
			
			
			
			
			
			<!-----------------------Content-------------------------->
			
			
				
				
			<div class="content">



	<form action="user_index.php" method="post" enctype="multipart/form-data">
		<table align="center">
		
			<tr>
				<td><h2 style="font-family:arial">Add Product</h2></td>
			</tr>
			
			<tr>
				<td style="font-family:arial">Product Title:</td>
				<td><input type="text" name="title" size="60" required/></td>
			</tr>
			<tr>
				<td style="font-family:arial">Product Description:</td>
				<td><textarea name="description" cols="60" rows="10" required></textarea></td>
			</tr>
			<tr>
				<td style="font-family:arial">Product Image:</td>
				<td><input type="file" name="image" required/></td>
			</tr>
			<tr>
			<tr>
				<td style="font-family:arial">Category:</td>
				<td>
					<select name="category_id">
						<option style="font-family:arial" required>Select a Category</option>
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
				<td style="font-family:arial">Price: $</td>
				<td><input type="text" name="price"required/></td>
			</tr>
			<tr>
				<td colspan"8"><input type="submit" name="insert_post" value="Submit"required/></td>
			</tr>
		</table>
	</form>
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
			</div>
			<!-----------------------Content-------------------------->
			
			
			
			<!-----------------------Footer-------------------------->
			
			
			
			<div class="footer">
				<h1>Aschente Pte Ltd.</h1>
			</div>
			
			<!-----------------------Footer-------------------------->
			
			
			
			
			
			
		</div>
	</body>
</html>