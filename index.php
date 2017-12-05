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
					<a href="javascript:void(0)" class="dropbtn">Categories</a> <!--Dropdown for Categories-->
						<div class="dropdown-content">
							<ul id="Categories">
								<?php getCats(); ?> <!--Call getCats() function from functions.php-->
								
							<ul>
						</div>
				  </li>
				  <li><a href="contact.php">Contact us</a></li>
				  <li><a href="about.php">About</a></li>
				  
				  

					<li style="float:right"><a class="active" href="login.php">Sign in</a></li>
					<li style="float:right"><a class="active" href="user_index.php">Add Items</a></li>

				
				  <form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" style="display:block;"placeholder="Search"/>
	
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
			
			<div class="promo" style="font-family:arial;height: 60%;
				width: 100%;
				background: #ffffff;">
				<h1>Promotions</h1>
				<h2><img src="/finalassignment/slider/GucciLBB.jpg" style="float:left;width:100%"></h2>
			</div>
				
				
			<div class="content">
				
				
				<div class=products>
					<div id="product_box">
						
						<?php getPro(); ?>
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