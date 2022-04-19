<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<header>
		
		<div class="header">
		<label>
		<input type="checkbox">
		<span class="menu"> <span class="hamburger"></span> </span>
		<ul>
			
  			<li> <a href="index.php">Home</a> </li>
  			<li> <a href="producten.php">Producten</a> </li>
  			<li> <a href="winkelmand.php">Winkelmandje</a> </li>
  			<li> <a href="contact.php">Contact</a> </li>
  			<li> <a href="status.php">Status</a> </li>
			<?php
				if (isset($_SESSION['user_id'])){
					echo "<li> <a href='order.php'>Orders</a> </li>";
					echo "<li> <a href='logout.php'>Uitloggen</a> </li>";
				} else {
					echo "<li> <a href='login.php'>Inloggen</a> </li>";
				}
			?>
		</ul>
		</label>
		<h1 id="mainh1">Scouting Raamsdonksveer</h1>
		
	</header>
</body>
</html>