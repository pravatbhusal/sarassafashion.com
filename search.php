<html>
<body>
<header>
	<title>Search | Buy Cultural Fashion Online USA</title>
	<!--style.css, favcon, googlefont, materializecss-->
	<link href="styles/categories_style.css" type="text/css" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	
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
	
	<!--navbar-->
	<div id="navbarHeader"></div>
	<div id="navbarTop">
		<a target="_blank" href="https://www.facebook.com/sarassafashion" style="margin-right: 5px"><img width="18" height="18" src="rsrc/index/facebook.png"></a>
		<a target="_blank" href="https://www.instagram.com/sarassa_official/" style="margin-right: 5px"><img width="18" height="18" src="rsrc/index/instagram.png"></a>
		<a target="_blank" href="https://twitter.com/SarassAbiz" style="margin-right: 100px;"><img width="18" height="18" src="rsrc/index/twitter.png"></a>
	</div>
	<div id="navbarMiddle">
		<p class="center-align" id="titleText"><a id="titleText" href="index.php">SarassA Fashion</a></p>
	</div>
	<div id="navbarBottom">
		<form id="searchForm" method="GET" action="search.php">
		  <div class="row">
			<div class="input-field">
				<a style="cursor: pointer;" onclick="document.getElementById('searchForm').submit();"><i class="material-icons" style="color: white;">search</i></a>
				<input class="browser-default" name="search" placeholder="Search..." type="text" id="search-text">
			</div>
		  </div>
		 </form>
	</div>
	
	<!--navbar and body white seperation-->
	<div id="seperator"></div>
</header>

<main>
	<!-- Item Buttons -->
	<div class="row" style="margin-top: 10px;" align="center">
		<a href="new.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">New Arrivals</a>
		<a href="women.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Women's Clothing</a>
		<a href="men.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Men's Clothing</a>
		<a href="jewelry.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Jewelry</a>
		<a href="sales.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Sales</a>
		<a href="events.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Events</a>
	</div>
	
	<!-- New Products + Show More -->
	<div class="container">
	<p class="center-align" id="new-title-text">- Search Results -</p>
	<div class="row center">
	<?php	
		include_once("db/dbconnection.php");
		$foundResult = false;
		
		//get queries that contain the search string (MySQL is case-insensitive)
		$search = $_GET['search'];
		$queryNew = "SELECT * FROM new WHERE name LIKE '%" . $search . "%'";
		$queryJewelry = "SELECT * FROM jewelry WHERE name LIKE '%" . $search . "%'";
		$queryMen = "SELECT * FROM men WHERE name LIKE '%" . $search . "%'";
		$querySales = "SELECT * FROM sales WHERE name LIKE '%" . $search . "%'";
		$queryWomen = "SELECT * FROM women WHERE name LIKE '%" . $search . "%'";
		
		$results = array();
		$results[] = mysqli_query($link, $queryNew);
		$results[] = mysqli_query($link, $queryJewelry);
		$results[] = mysqli_query($link, $queryMen);
		$results[] = mysqli_query($link, $querySales);
		$results[] = mysqli_query($link, $queryWomen);
		
		for($i = 0; $i < 5; $i ++) {
			while($row = mysqli_fetch_array($results[$i])) {	
				$id = $row['id'];
				$category = $row['category'];
				$name = $row['name'];
				$price = $row['price'];
				$sizes = $row['sizes'];
				$description = $row['description'];
				$picture = $row['picture'];
				echo '
				<div class="col s12 m6 l6 xl3">
					<div class="image-container">
					  <img src="'.$picture.'" class="image">
					  <div class="image-title">
						'.$name.'
					  </div>
					  <div class="image-price">
						$'.$price.' USD
					  </div>
					  <a href="view.php?category='.$category.'&id='.$id.'"><div class="image-button">
						<div class="image-text">Choose Options</div>
					  </div></a>
					</div>
				</div>
				';
				$foundResult = true;
			}
		}
		?>	
		</ul>
	</div>
	<?php 
		if($foundResult == false) {
			echo '<h5 style="color: white">No results found...</h5>';
		} else {
			//SarassA Logo
			echo '<img src="rsrc/index/sarassaalphalogo.png" id="sarassalogo">';
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

//if we're on the first page or less, then add certain classes for the previous button
if(document.getElementById("currentPage").value <= 1) {
	document.getElementById("previousPage").className += "disabled";
	document.getElementById("previousPageHref").removeAttribute("href");
} else {
	document.getElementById("previousPage").className += "waves-effect";
}
</script>
</body>
</html>