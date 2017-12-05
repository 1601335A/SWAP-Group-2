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


				  <form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search"/>
	
					</form>
					

				  
				  
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
				
				
				<div class=products>
					<div id="product_box">
						<?php 
if(isset($_GET['user_query'])){
	
	$search_query = $_GET['user_query'];
	
	$get_pro = "SELECT * FROM products WHERE title like '%$search_query%'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['id'];
		$pro_catid = $row_pro['category_id'];
		$pro_title = $row_pro['title'];
		$pro_desc = $row_pro['description'];
		$pro_img = $row_pro['image'];
		$pro_price = $row_pro['price'];
		
		echo "
			<div id='single_product'>
			
				<h3>$pro_title</h3>
				<img src='/finalassignment/product_images/$pro_img' width='180' height='180' />
				
				<p><b> $ $pro_price </b></p>
				
				<a href='details.php?id=$pro_id'> <button style='float:left'>Details</button></a>
				
				<a href='cart.php?id=$pro_id'> <button style='float:right;color:#67cbf7'>Add to Cart</button></a>
			
			</div>
		
		";
		}
		
	}
?>
						<?php getCatPro(); ?>

					</div>
				</div>
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