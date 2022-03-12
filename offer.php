<!DOCTYPE html>
<html>
<head>
	<title>Offer</title>
	<link rel="stylesheet" type="text/css" href="project.css">
	<style >
		body{
			background-color: gray;
			
		}
		h1{
			background-color: #001;
			color: goldenrod;
		}
	</style>
</head>
<body>
	<<?php 
		include 'xyz.php';
	 ?>
		<h1>Discount on books</h1>

	<div class="disc_menu1">

		<ul>
			<li><a href="used.php">Used Books</a></li>
			<li><a href="discount.php">Discount offer</a></li>

		</ul>
		
	</div>

			<h1>OUR OFFER</h1>
			<div class="offer">
		<div class="palpasa">
						<img src="https://i0.wp.com/www.tipsnepal.com/wp-content/uploads/2020/08/palpasa-cafe.jpg?resize=316%2C501&quality=100&strip=all&ssl=1" width="150px" height="160px" >
					<p class="name"><a href="#">Palpasa Cafe</a><br>
						<p style="color:green;">discount-8%</p>
					</p>	
					
					<h3 class="price"><del>NRs.325</del>299</h3>
					<input type="button" value="Buy">
						
					</div>
					<div class="indian">
						<img src="https://m.economictimes.com/photo/55914864.cms" width="150px" height="160px" >
					<p class="name"><a href="#">One Indian Girl</a><br>
						<p style="color:green;">discount-15%</p>
					</p>	
					
					<h3 class="price"><del>NRs.385</del>327.25</h3>
					<input type="button" value="Buy">
						
					</div>
					</div>


	

</body>
</html>