<?php

include_once "lib/php/functions.php";

?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Checkout page</title>

	<?php
        include "parts/meta.php"
    ?>
</head>
<body>

	<?php
        include "parts/navbar.php"
    ?>
    <div class="title">
        <h1>Please Checkout Your Items</h1>
    </div>
	

	<div class="container">
		<div class="card soft">

                	<form class="form">
                		<h3>Payment</h3>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="first-name" class="form-label">First Name</label>
									<input id="first-name" type="text" placeholder="Name" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="last-name" class="form-label">Last Name</label>
									<input id="last-name" type="text" placeholder="Name" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<label for="number" class="form-label">Card Number</label>
							<input id="number" type="text" placeholder="" class="form-input">
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="expiration" class="form-label">Expiration</label>
									<input id="expiration" type="text" placeholder="MM-YY" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="cvv" class="form-label">CVV</label>
									<input id="cvv" type="text" placeholder="CVV" class="form-input">
								</div>
							</div>
						</div>

						<h3>Address</h3>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="street" class="form-label">Street</label>
									<input id="street" type="text" placeholder="Street name" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="city" class="form-label">City</label>
									<input id="city" type="text" placeholder="City" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="state" class="form-label">State</label>
									<input id="state" type="text" placeholder="State" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="country" class="form-label">Country</label>
									<input id="country" type="text" placeholder="Country" class="form-input">
								</div>
							</div>
						</div>
						<div class="form-control">
							<div class="grid gap">
								<div class="col-xs-12 col-md-6">
									<label for="zip" class="form-label">Zip Code</label>
									<input id="zip" type="text" placeholder="Zip Code" class="form-input">
								</div>
								<div class="col-xs-12 col-md-6">
									<label for="phone" class="form-label">Phone Number</label>
									<input id="phone" type="text" placeholder="Phone Number" class="form-input">
								</div>
								
							</div>
						</div>
				
						
							<a href="confirmation.php" class="form-button">Complete Checkout</a>

						</div>
					</form>

                </div>
        </div>
	</div>

	
    <div class="container">
        <footer class="flex-stretch card soft">
            @Botong
    </footer>
    </div>
	
</body>
</html>