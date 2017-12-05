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


				  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a name">

				  
				  
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
						
						<?php getPro(); ?>
						<?php getCatPro(); ?>

					</div>
				</div>
			</div>
			<!-----------------------Content-------------------------->
			
			
			
			<!-----------------------Footer-------------------------->
			
			
			
			<div class="footer">
				Aschente Pte Ltd.
			</div>
			
			<!-----------------------Footer-------------------------->
			
			
			
			
			
			
		</div>
	</body>
</html>