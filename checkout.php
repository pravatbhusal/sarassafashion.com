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
	<ul id="menDropDown" class="dropdown-content">
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=kurta">Kurtas</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=suit">2 Pc Suits</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pajama">Pajamas</a></li>
	</ul>
	<ul id="jewelryDropDown" class="dropdown-content">
		<li style="background-color: white;"><a style="color: black;"><b>Pakistani</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=pakistani%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>Indian</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=indian%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>Turkish</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=turkish%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>Bridal</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=bridal%20necklace">Necklaces</a></li>
		<li class="divider"></li>
		<li style="background-color: white;"><a style="color: black;"><b>CZ</b></a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20earring">Earrings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20ring">Rings</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20braclet">Bracelets/Bangels</a></li>
		<li style="background-color: white;"><a style="color: black;" href="search.php?search=cz%20necklace">Necklaces</a></li>
	</ul>

	<!-- Item Buttons -->
	<div class="row" style="margin-top: 10px;" align="center">
		<a href="new.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">New Arrivals</a>
		<a class='dropdown-button btn' data-activates="womenDropDown" href="women.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Women's Clothing</a>
		<a class='dropdown-button btn' data-activates="menDropDown" href="men.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Men's Clothing</a>
		<a class='jewelry-dropdown-button btn' data-activates="jewelryDropDown" href="jewelry.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Jewelry</a>
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
                    //check if the cookie is one of the items
                    if (strpos($item, 'item_') !== false) {
                        $itemArray = explode("_", $item); //0 = "item", 1 = id, 2 = item category, 3 = size
                        $query = "SELECT * FROM " . $itemArray[2] . " WHERE id = " . $itemArray[1];
                        $result = mysqli_query($link, $query);

                        $row = mysqli_fetch_array($result);
                        $itemId = $itemArray[1];
                        $itemName = $row['name'];
                        $Price = $row['price'];
                        //if there's a saleprice, then set that as the price
                        if ($row['saleprice'] > 0) {
                            $Price = $row['saleprice'];
                        }
                        $itemIcon = $row['picture'];
                        $size = $itemArray[3];
                        $tax = ($Price * (1 + $taxUSD)) - $Price;
                        $taxPrice = $Price + $tax;
                        echo '
							<li id="item_'.$i.'" data-itemName='.$item.' data-itemQuantity='.$quantity.' data-itemPrice='.$taxPrice.' class="collection-item avatar" style="margin-top: 10px; background-color: rgba(0, 0, 0, 0);">
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
            if ($containsItems == false) {
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
			';
                //check if the customer used a discount code, and check if it's an existing coupon code
                if (isset($_POST["couponName"])) {
                    $coupon = $_POST["couponName"];
                    $query = "SELECT * FROM coupons WHERE name='$coupon' AND expires > NOW()";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_array($result);

                    //if the customer used a real coupon value, if not then don't give them a discount
                    if (isset($row)) {
                        //add the discount, and update the total price
                        $discount = $row["discount_percent"];
                        $discountPrice = $totalPrice * ((100 - $discount)/100);
                        $tax = ($discountPrice * (1 + $taxUSD)) - $discountPrice;
                        $taxTotalDiscountPrice = $discountPrice + $tax;
                        echo '<input type="hidden" name="discount_rate_cart" value="'.$discount.'">';
                        echo '<h4 style="color: white; display: inline; margin-left: 10px;" id="totalPrice" data-totalPrice="'.$taxTotalDiscountPrice.'"><del>$'.$totalPrice.' USD</del> $'.$discountPrice.' USD + $'.$tax.' USD tax</h4>';
                    } else {
                        $tax = ($totalPrice * (1 + $taxUSD)) - $totalPrice;
                        $taxTotalPrice = $totalPrice + $tax;
                        echo '<h4 style="color: white; display: inline; margin-left: 10px;" id="totalPrice" data-totalPrice="'.$taxTotalPrice.'">$'.$totalPrice.' USD + $'.$tax.' USD tax</h4>';
                    }
                } else {
                    $tax = ($totalPrice * (1 + $taxUSD)) - $totalPrice;
                    $taxTotalPrice = $totalPrice + $tax;
                    echo '<h4 style="color: white; display: inline; margin-left: 10px;" id="totalPrice" data-totalPrice="'.$taxTotalPrice.'">$'.$totalPrice.' USD + $'.$tax.' USD tax</h4>';
                }
                echo '
				<br>
				<label style="color: white">Shipping fee of $'.$shippingFeeUSD.' USD per item will apply.</label>
				</form>
				<form method="POST" action="?">
				<input name="couponName" class="browser-default" type="text" placeholder="Coupon Code...">
				<button id="couponBTN" type="submit" style="margin-bottom: 10px;">Apply Coupon</button>
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
	//dropdown button
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

	//jewelry dropdown button
	$('.jewelry-dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: false, // Does not change width of dropdown to that of the activator
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
		delete_cookie(itemName);

		//reload page to update the cart's total prices
		location.reload();
	}
</script>
</body>
</html>
