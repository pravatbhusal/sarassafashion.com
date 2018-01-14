<html>
<body>
<header>
	<title>Checkout | Buy Cultural Fashion Online USA</title>
	<!--style.css, favcon, googlefont, materializecss-->
	<link href="styles/categories_style.css" type="text/css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	
	<!--jquery, materializejs-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script>
		//javascript is above here so that the php code can read the newItem() function
			var items = new Array();
			//records new item values into an array
			function newItem(itemNumber) {
				var item = document.getElementById("item_" + itemNumber);
				var itemName = item.getAttribute("data-itemName");
				var itemQuantity = item.getAttribute("data-itemQuantity");
				var itemPrice = item.getAttribute("data-itemPrice");
				items.push({number: itemNumber, name: itemName, quantity: itemQuantity, price: itemPrice});
			}
	</script>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!--navbar-->
	<div id="navbarHeader"></div>
	<div id="navbarTop">
		<a target="_blank" href="https://www.facebook.com/sarassafashion" style="margin-right: 5px"><img width="18" height="18" src="rsrc/index/facebook.png"></a>
		<a target="_blank" href="https://www.instagram.com/sarassa_official/" style="margin-right: 5px"><img width="18" height="18" src="rsrc/index/instagram.png"></a>
		<a target="_blank" href="https://twitter.com/SarassAbiz" style="margin-right: 110px;"><img width="18" height="18" src="rsrc/index/twitter.png"></a>
	</div>
	<div id="navbarMiddle">
		<h4 id="titleText"><a id="titleText" href="index.php">SarassA Fashion</a></h4>
	</div>
	<div id="navbarBottom">
		<form id="searchForm" method="GET" action="search.php">
			<div class="input-field">
				<button type="submit" style="border:none; background-color:transparent;">
					<i class="material-icons" style="color: white;">search</i>
				</button>
				<input class="browser-default" name="search" placeholder="Search..." type="text" required id="search-text">
			</div>
		 </form>
	</div>
	
	<!--navbar and body white seperation-->
	<div id="seperator"></div>
</header>

<main>
	<!-- Dropdown Structure -->
	<ul id="womenDropDown" class="dropdown-content">
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=kurti">Kurtis</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=suit">3 Pc Suits</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=gararah">Gararahs</a></li>
	</ul>
	
	<!-- Item Buttons -->
	<div class="row" style="margin-top: 10px;" align="center">
		<a href="new.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">New Arrivals</a>
		<a class='dropdown-button btn' data-activates="womenDropDown" href="women.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Women's Clothing</a>
		<a href="men.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Men's Clothing</a>
		<a href="jewelry.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Jewelry</a>
		<a href="sales.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Sales</a>
		<a href="events.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Events</a>
	</div>
	
	<!-- Checkout -->
	<div class="container" id="itemContainer">
		<ul class="collection" style="background-color: rgba(0, 0, 0, 0); border: none;">
			<?php 
				include_once("db/dbconnection.php");
				$containsItems = false;
				$i = 0;
				$totalPrice = 0;
				foreach ($_COOKIE as $item=>$quantity) {
					//check if the cookie is one of the niche items
					if(strpos($item, 'item_') !== false) {
						$itemArray = explode("_", $item); //0 = "item", 1 = id, 2 = item category, 3 = size
						$query = "SELECT * FROM " . $itemArray[2] . " WHERE id = " . $itemArray[1];
						$result = mysqli_query($link, $query);
						
						$row = mysqli_fetch_array($result);
						$itemId = $itemArray[1];
						$itemName = $row['name'];
						$Price = $row['price'];
						$itemIcon = $row['picture'];
						$size = $itemArray[3];
							echo '
							<li id="item_'.$i.'" data-itemName='.$item.' data-itemQuantity='.$quantity.' data-itemPrice='.$Price.' class="collection-item avatar" style="margin-top: 10px; background-color: rgba(0, 0, 0, 0);">
							<div class="row">
								<div class="col s12 m12 l3">
								  <i><img class="materialboxed" src="'.$itemIcon.'" style="width: 125px; height: 150px; border-radius: 5px;"></i>
								</div>
								<div class="col s12 m12 l9">
								  <p style="color: white;"><b>'.$itemName.'</b><span> x '.$quantity.'</span></p>
								  <p style="color: white;">$'.$Price.' USD</p>
								  <p style="color: white;">Size: '.$size.'</p>
								  <p><a onclick="removeCart('.$i.')" class="waves-effect waves-light btn" style="background: black;">Remove</a></p>
								</div>
							</div>
							</li>'; 
							
							echo '<script type="text/javascript">',
								 'newItem('.$i.');',
								 '</script>';
								 
						$containsItems = true;
						$totalPrice += $Price * $quantity;
						$i++;
					}
				}
			?>
		</ul>
		<?php
			if($containsItems == false) {
				echo '<h5 style="color: white">Your cart is empty!</h5>';	
			} else {
				echo '
				<form id="paypalForm" method="POST" action="https://www.paypal.com/cgi-bin/webscr">
				<button id="paypalBTN" onclick="paypalCheckOut('.$shippingFeeUSD.')" style="float: left; background-color: #0c0c0c;" class="btn waves-effect waves-light" value="PayPal">
					Purchase
					<i class="material-icons right">arrow_forward</i>
				</button>
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="upload" value="1">
				<input type="hidden" name="business" value="'.$adminEmail.'">
				<h4 style="color: white; display: inline; margin-left: 10px;" id="totalPrice" data-totalPrice="'.$totalPrice.'">$'.$totalPrice.' USD</h4>
				<br>
				<label style="color: white">Shipping fees may apply</label>
				</form>
				';
			}
		?>
	</div>
</main>
<footer class="page-footer" id="footer-page">
	<div class="container">
		<div class="row center-align">
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">email</i></span>Contact Us</h5>
				<ul>
				<li id="footer-sub-text"><span>info@sarassafashion.com</li>
				<li id="footer-sub-text">3401 Custer Rd Unit 157</li>
				<li id="footer-sub-text">Plano, TX 75023</li>
				<li id="footer-sub-text">331-454-4236</li>
				</ul>
			</div>
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">link</i></span>Quick Links</h5>
				<ul>
				<li><a id="footer-sub-text" href="anime.php">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">assignment</i></span>Categories</h5>
				<ul>
				<li><a id="footer-sub-text" href="anime.php">New Arrivals</a></li>
				<li><a id="footer-sub-text" href="anime.php">Women's Clothing</a></li>
				<li><a id="footer-sub-text" href="anime.php">Men's Clothing</a></li>
				<li><a id="footer-sub-text" href="anime.php">Jewelry</a></li>
				<li><a id="footer-sub-text" href="anime.php">Sales</a></li>
				<li><a id="footer-sub-text" href="anime.php">Events</a></li>
				</ul>
			</div>
			<div class="col s12 m6 l3 xl3">
				<h5 id="footer-header-text"><span><i class="material-icons" style="margin-right: 5px">payment</i></span>Accepted Payments</h5>
				<ul>
				<li id="footer-sub-text">PayPal</li>
				<li id="footer-sub-text">VISA</li>
				<li id="footer-sub-text">MasterCard</li>
				<li id="footer-sub-text">American Express</li>
				<li id="footer-sub-text">Discover Card</li>
				</ul>
			</div>
		</div>
	</div>
			<div class="footer-copyright" id="footer-trademark">
				<div class="container" id="footer-sub-text">
				Copyright &copy 2018 SarassA Fashion All rights reserved.
				</div>
			</div>
</footer>
            
<script>
	//women dropdown button
	$('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
		}
	);
	
	function paypalCheckOut(shippingCost) {
		//add the paypal form information based on the number of items in the array
		for (var i = 0; i < items.length; i ++) {						
			document.getElementById("paypalForm").innerHTML += '<input form="paypalForm" type="hidden" name="item_name_' + (i + 1) + '" value="' + items[i].name + '">';
			document.getElementById("paypalForm").innerHTML += '<input form="paypalForm" type="hidden" name="amount_' + (i + 1) + '" value="' + items[i].price + '">';
			document.getElementById("paypalForm").innerHTML += '<input form="paypalForm" type="hidden" name="quantity_' + (i + 1) + '" value="' + items[i].quantity + '">';
			document.getElementById("paypalForm").innerHTML += '<input form="paypalForm" type="hidden" name="shipping_' + (i + 1) + '" value="' + shippingCost + '">';
		}
		document.getElementById('paypalForm').submit(); //submit the form
	}

	//deletes a cookie based on the name
	function delete_cookie(name) {
		document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	}

	function removeCart(itemNumber) {
		var item = document.getElementById("item_" + itemNumber);
		var itemName = item.getAttribute("data-itemName");
		var itemQuantity = item.getAttribute("data-itemQuantity");
		var itemPrice = item.getAttribute("data-itemPrice");
		delete_cookie(itemName);
		item.parentNode.removeChild(item); //remove the item
		items.splice(itemNumber, 1); //removes the item from the items array for PayPal checkout

		//update the total price
		var totalPriceText = document.getElementById("totalPrice");
		var totalPrice = totalPriceText.getAttribute("data-totalPrice");
		totalPrice -= itemPrice * itemQuantity;
		document.getElementById("totalPrice").innerHTML = "$" + totalPrice + " USD";
		document.getElementById("totalPrice").setAttribute("data-totalPrice", totalPrice);

		//get number of cart items within the browser
		var numberOfCartItems = 0;
		numberOfCartItems += (document.cookie.split('item_').length - 1);

		//if number of cart items are empty, then notify the user
		if(numberOfCartItems == 0) {
			var container = document.getElementById("itemContainer");
			var emptyParagraph = document.createElement("p");
			emptyParagraph.setAttribute("style", "color: white;");
			var node = document.createTextNode("No items in the checkout...");
			emptyParagraph.appendChild(node);
			container.appendChild(emptyParagraph);
			//remove the form
			document.getElementById("paypalForm").parentNode.removeChild(document.getElementById("paypalForm"));
		}
	}
</script>
</body>
</html>