<?php
include("functions.php");
?>

<html>
	<head>
		<title>Aschente</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
	
	
	
		<div class="wrapper">
		
		
		
		
			<!-----------------------Header-------------------------->
		
		
			<div class="heading">
				<h1>Ashcente</h1>
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
				  
				  
					<form action="test.php" method"post" id="searchbar">
					<input type="text" name="search" placeholder="Search here.."/>
					<input type="submit" value=">>" />
					

					<!--
				  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
				  -->
				  
				  
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
				<h1>Email: aschente@gmail.com</h1>
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