<!DOCTYPE HTML>
<html>
<head>
	<title>Uppgift 2</title>
	<meta charset="utf-8"/>
	<link type="text/css" rel="stylesheet" href="style.css"></link>
</head>
<body>
	<div class="wrapper">
		<div class="menu">
			<ul>
				<li id="*">All</li>
				<li id="item-candy">Candy</li>
				<li id="item-cakes">Cakes</li>
				<li id="item-smoothies">Smoothies</li>
			</ul>
		</div>
		<div class="container">	
			<?php
			$directory = "./img/";
			$candy = glob($directory . "candy-*.jpg");
			$cakes = glob($directory . "cake-*.jpg");
			$smoth = glob($directory . "smoth-*.jpg");
			$count = 0;
			foreach($candy as $image) {
				echo "<img class='candy'id='" . $count . "'src='" . $image . "'/>";
				++$count;
			}
			foreach($cakes as $image) {
				echo "<img class='cakes'id='" . $count . "'src='" . $image . "'/>";
				++$count;
			}
			foreach($smoth as $image) {
				echo "<img class='smoothies'id='" . $count . "'src='" . $image . "'/>";
				++$count;
			}
			?>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
	<script src='js/isotope.js'></script>
	<script src='js/main.js'></script>
</body>
</html>