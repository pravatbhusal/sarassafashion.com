<html lang="en">
<body>
	<header>
		<title>Admin</title>   
		<!--style.css, favcon, googlefont, materializecss-->  
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  	
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		
		<!--jquery, materializejs-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content=""> 
		<meta name="author" content=""> 
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
		
		<!--upload item modal-->
		<div id="upload-item-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/uploaditem.php" method="POST" enctype="multipart/form-data">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Upload an Item</p></b>
						<select class="browser-default input-field col s12 m12 l12" name="category">
						  <option value="women">Women's Clothing</option>
						  <option value="men">Men's Clothing</option>
						  <option value="jewelry">Jewelry</option>
						</select>
						<input required name="itemName" class="input-field col s12 m12 l12" type="text"  placeholder="Item Name" style="width: 600px;"></input>
						<input required name="itemPrice" class="input-field col s12 m12 l12" placeholder="Regular Price in USD" style="width: 600px;" min="1" onkeypress="return isNumberKey(event)"></input>
						<input name="itemSalePrice" class="input-field col s12 m12 l12" placeholder="Item Sale Price in USD (Leave blank if there is no sale for this item)" style="width: 600px;" min="0" onkeypress="return isNumberKey(event)"></input>
						<p class="col s12 m12 l12">
							<input name="sizeList[]" value="Adult-XL" type="checkbox" class="filled-in" id="adult-xl"/>
							<label for="adult-xl">Adult-XL</label>
							<input name="sizeList[]" value="Adult-Large" type="checkbox" class="filled-in" id="adult-l"/>
							<label for="adult-l">Adult-Large</label>
							<input name="sizeList[]" value="Adult-Medium" type="checkbox" class="filled-in" id="adult-medium"/>
							<label for="adult-medium">Adult-Medium</label>
							<input name="sizeList[]" value="Adult-Small" type="checkbox" class="filled-in" id="adult-small"/>
							<label for="adult-small">Adult-Small</label>
							<input name="sizeList[]" value="Youth-Large" type="checkbox" class="filled-in" id="youth-large"/>
							<label for="youth-large">Youth-Large</label>
							<input name="sizeList[]" value="Youth-Medium" type="checkbox" class="filled-in" id="youth-medium"/>
							<label for="youth-medium">Youth-Medium</label>
							<input name="sizeList[]" value="Youth-Small" type="checkbox" class="filled-in" id="youth-small"/>
							<label for="youth-small">Youth-Small</label>
						</p>
						<textarea required id="itemDescription" name="itemDescription" style="width: 600px;" placeholder="Item Description" class="materialize-textarea input-field col s12 m12 l12"></textarea>
						<h6 class="input-field col s12 m12 l3">Picture File:</h6>
						<input required type="file" id="itemPicture" name="itemPicture" accept="image/*" class="input-field col s12 m12 l6">
						<button type="submit" class="btn input-field col s12 m12 l12">Upload</button>
					</form>
				</div>
			</div>
		</div>
		
		<!--delete item modal-->
		<div id="delete-item-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/deleteitem.php" method="POST">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Delete an Item</p></b>
						<select class="browser-default input-field col s12 m12 l12" name="category">
						  <option value="women">Women's Clothing</option>
						  <option value="men">Men's Clothing</option>
						  <option value="jewelry">Jewelry</option>
						</select>
						<input required name="itemId" class="input-field col s12 m12 l12" type="text"  placeholder="Item Id" style="width: 500px;"></input>
						<button type="submit" class="btn input-field col s12 m12 l12">Delete</button>
					</form>
				</div>
			</div>
		</div>
		
		<!--upload event modal-->
		<div id="upload-event-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/uploadevent.php" method="POST" enctype="multipart/form-data">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Add an Event</p></b>
						<input required name="eventName" class="input-field col s12 m12 l12" type="text"  placeholder="Event Name" style="width: 750px;"></input>
						<input required name="expires" type="text" placeholder="Event End Date" class="input-field col s12 m12 l12 datepicker">
						<h6 class="input-field col s12 m12 l3">Picture File:</h6>
						<input required type="file" name="eventPicture" accept="image/*" class="input-field col s12 m12 l6">
						<button type="submit" class="btn input-field col s12 m12 l12">Upload</button>
					</form>
				</div>
			</div>
		</div>
		
		<!--delete event modal-->
		<div id="delete-event-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/deleteevent.php" method="POST">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Delete an Event</p></b>
						<input required name="eventId" class="input-field col s12 m12 l12" type="text"  placeholder="Event Id" style="width: 500px;"></input>
						<button type="submit" class="btn input-field col s12 m12 l12">Delete</button>
					</form>
				</div>
			</div>
		</div>
		
		<!--add coupon modal-->
		<div id="add-coupon-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/uploadcoupon.php" method="POST">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Add a Coupon</p></b>
						<input required name="couponName" class="input-field col s12 m12 l12" type="text"  placeholder="Coupon Name" style="width: 750px;"></input>
						<input required name="discount" class="input-field col s12 m12 l12" placeholder="Coupon % Discount (Do not add % sign)" style="width: 600px;" min="0" onkeypress="return isNumberKey(event)"></input>
						<input required name="expires" type="text" placeholder="Coupon Expire Date" class="input-field col s12 m12 l12 datepicker">
						<button type="submit" class="btn input-field col s12 m12 l12">Upload</button>
					</form>
				</div>
			</div>
		</div>
		
		<!--delete coupon modal-->
		<div id="delete-coupon-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/deletecoupon.php" method="POST">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Delete a Coupon</p></b>
						<input required name="couponName" class="input-field col s12 m12 l12" type="text"  placeholder="Coupon Name" style="width: 500px;"></input>
						<button type="submit" class="btn input-field col s12 m12 l12">Delete</button>
					</form>
				</div>
			</div>
		</div>
		
		<!--edit homepage pictures modal-->
		<div id="edit-homepictures-modal" class="modal">
			<div class="modal-content">
				<div class="row">
					<form action="db/updatehome.php" method="POST" enctype="multipart/form-data">
					<b><p style="text-align: center;" class="input-field col s12 m12 l12">Edit Homepage Pictures</p></b>
						<h6 style="text-align: center" class="input-field col s12 m12 l12">Individual files may be uploaded to update the home page's carousel.</h6>
						<h6 class="input-field col s12 m12 l12">Picture 1 File:</h6>
						<input type="file" name="picture1" accept="image/*" class="input-field col s12 m12 l6">
						<h6 class="input-field col s12 m12 l12">Picture 2 File:</h6>
						<input type="file" name="picture2" accept="image/*" class="input-field col s12 m12 l6">
						<h6 class="input-field col s12 m12 l12">Picture 3 File:</h6>
						<input type="file" name="picture3" accept="image/*" class="input-field col s12 m12 l6">
						<h6 class="input-field col s12 m12 l12">Picture 4 File:</h6>
						<input type="file" name="picture4" accept="image/*" class="input-field col s12 m12 l6">
						<button type="submit" class="btn input-field col s12 m12 l12">Upload</button>
					</form>
				</div>
			</div>
		</div>
		
		<?php
		include_once("db/dbconnection.php");
		
		if(isset($_POST['password'])) {
			$password = $_POST['password'];
		} else {
			$password = "";	
		}
		
		if($password == $adminPassword) {
			echo '<div id="adminDiv" style="text-align: center">
			<b><h4 style="color: #e53935;">Admin Control Panel</h4></b>
			
			<br>
			<button href="#upload-item-modal" class="modal-trigger btn" style="margin-bottom: 10px;">Upload an item</button>
			<br>
			<button href="#delete-item-modal" class="modal-trigger btn" style="margin-bottom: 10px; background-color: #e53935;">Delete an item</button>
			<br>
			
			<hr width="500px">
			<button href="#upload-event-modal" class="modal-trigger btn" style="margin-bottom: 10px;">Add an Event</button>
			<br>
			<button href="#delete-event-modal" class="modal-trigger btn" style="margin-bottom: 10px; background-color: #e53935;">Delete an Event</button>
			<br>
			
			<hr width="500px">
			<button href="#add-coupon-modal" class="modal-trigger btn" style="margin-bottom: 10px;">Add a Coupon</button>
			<br>
			<button href="#delete-coupon-modal" class="modal-trigger btn" style="margin-bottom: 10px; background-color: #e53935;">Delete a coupon</button>
			<br>
			
			<hr width="500px">
			<button href="#edit-homepictures-modal" class="modal-trigger btn" style="margin-bottom: 10px;">Edit Home Page Pictures</button>
			<br>
			
			<hr width="500px">
			PayPal Email: <input id="email" type="text" style="width: 250px; margin-left: 5px;" value='.$adminEmail.'>
			<br>
			Admin Page Password: <input id="password" type="password" style="width: 250px; margin-left: 5px;" value='.$adminPassword.'>
			<br>
			Shipping Price Per Item (USD): <input id="shipping" type="text" style="width: 250px; margin-left: 5px;" min="1" onkeypress="return isNumberKey(event)" value='.$shippingFeeUSD.'>
			<br>
			Tax Amount Per Dollar (USD): <input id="tax" type="text" style="width: 250px; margin-left: 5px;" min="1" onkeypress="return isNumberKey(event)" value='.$taxUSD.'>
			<br>
			<button onclick="updateSettings()" class="btn">Update Settings</button>
			<br>
			<br>
			
			<hr width="800px">
			<h6>Emails List (Copy and Paste):</h6>
			<textarea placeholder="Emails..." style="width: 750px" id="email-list" class="browser-default"></textarea>
			<p><button onclick="getEmails()" class="btn">Get Emails</button></p>
			
			<hr>
			<div class="container">
			<table>
				<tr>
					<th>Coupon Name</th>
					<th>Expires</th> 
					<th>Discount Percent</th>
				</tr>
			';
				//add rows for the non-expired coupons
				$query = "SELECT * FROM coupons WHERE expires > NOW()";
				$result = mysqli_query($link, $query);
				while($row = mysqli_fetch_array($result)) {
					$name = $row['name'];
					$expires = $row['expires'];
					$discount = $row['discount_percent'];
					echo '
						<tr>
						<td>'.$name.'</td>
						<td>'.$expires.'</td> 
						<td>'.$discount.'%</td>
						</tr>
					';
					break;
				}
			echo '
			</table>
			</div>
			
			<hr>
			<a href="index.php">Click here to go back to the home page.</a>
			</div>
			';
		} else if($password != "") {
			echo '<form style="text-align: center;" method="POST" action="admin.php">
			<b><h4 style="color: #e53935;">Admin Panel</h4></b>
			<br>
			<p style="color: red; text-align: center;">The password you entered was incorrect!</p>
			<br>
			<input type="password" name="password" align="center" placeholder="Password" style="width: 500px;"></input>
			<br>
			<input type="submit" name="submit" class="btn" value="Submit" style="background-color: #e53935; margin-bottom: 10px;"></input>
			<br>
			<a href="index.php">If you are not an Admin, then it is highly advised that you leave this page.</a>
			</form>';
		} else {
			echo '<form style="text-align: center;" method="POST" action="admin.php">
			<b><h4 style="color: #e53935;">Admin Panel</h4></b>
			<br>
			<input type="password" name="password" align="center" placeholder="Password" style="width: 500px;"></input>
			<br>
			<input type="submit" name="submit" class="btn" value="Submit" style="background-color: #e53935; margin-bottom: 10px;"></input>
			<br>
			<a href="index.php">If you are not an Admin, then it is highly advised that you leave this page.</a>
			</form>';
		}
		?>
	</header>
	
	<main>
		
	</main>
	
	<footer>
	
	</footer>
</body>

	<script>
		//modal, text editor, datepicker settings
		$('.modal').modal();
		$('#itemDescription').trigger('autoresize');
		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15, // Creates a dropdown of 15 years to control year,
			today: 'Today',
			clear: 'Clear',
			close: 'Ok',
			format: 'yyyy-mm-dd',
			closeOnSelect: false // Close upon selecting a date,
		});
		
		function isNumberKey(evt)
		{
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode != 46 && charCode > 31 
			&& (charCode < 48 || charCode > 57))
			 return false;

			return true;
		}
		
		//update the admin settings (using ajax to contact the updatesettings.php)
		function updateSettings() {
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			var shipping = document.getElementById("shipping").value;
			var tax = document.getElementById("tax").value;
			
			var http = new XMLHttpRequest();
			var location = window.location.href;
			var directoryPath = location.substring(0, location.lastIndexOf("/")+1);
			var url = directoryPath + "db/updatesettings.php";
			//variables to send via POST to the php file
			var params = "email=" + email + "&password=" + password + "&shipping=" + shipping + "&tax=" + tax;
			http.open("POST", url, true);

			//Send the proper header information along with the request
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			http.onreadystatechange = function () { //Call a function when the state changes.
				if (http.readyState == 4 && http.status == 200) {
					alert(http.responseText); //alert the result
				}
			}
			http.send(params);
		}
		
		//get the emails
		function getEmails() {
			var email = document.getElementById("email-list");
			
			var http = new XMLHttpRequest();
			var location = window.location.href;
			var directoryPath = location.substring(0, location.lastIndexOf("/")+1);
			var url = directoryPath + "db/getemails.php";
			//variables to send via POST to the php file
			var params = "";
			http.open("POST", url, true);

			//Send the proper header information along with the request
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			http.onreadystatechange = function () { //Call a function when the state changes.
				if (http.readyState == 4 && http.status == 200) {
					//set the email-list html to the response, and make sure to remove the trailing comma
					var emails = http.responseText;
					emails = emails.slice(0, -1); // "12345.0"
					email.innerHTML = emails;
				}
			}
			http.send(params);
		}
	</script>
</html>