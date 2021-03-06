<?php

include_once "lib/php/functions.php";

?>	

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Owen‘s Store</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none"></nav>
			<nav class="nav">
				<ul class="container display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Product List</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
					<li><a href="product_checkout.php">Checkout</a></li>
				</ul>
			</nav>
		</div>
	</header>