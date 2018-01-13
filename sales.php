<html>
<body>
<header>
	<title>Sales | Buy Cultural Fashion Online USA</title>
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
	<p class="center-align" id="new-title-text">- Sales -</p>
	<div class="row center">
	<?php	
	$item = array();
	include_once("db/dbconnection.php");
	if(isset($_GET['page'])) {
		if($_GET['page'] > 0) {
			$pageIndex = $_GET['page'] - 1;
		} else {
			$pageIndex = 0;	
		}
	} else {
		$pageIndex = 0;
	}
	$viewItems = ($pageIndex * 12) . "," . ($pageIndex + 12); //get 12 items from the current page
	$query = "SELECT * FROM sales ORDER by id DESC LIMIT " . $viewItems;
	$result = mysqli_query($link, $query);
	while($row = mysqli_fetch_array($result)) {
		$item[] = $row;
	}
	for($i = 0; $i < count($item); $i++) {
		$id = $item[$i]['id'];
		$category = $item[$i]['category'];
		$name = $item[$i]['name'];
		$price = $item[$i]['price'];
		$sizes = $item[$i]['sizes'];
		$description = $item[$i]['description'];
		$picture = $item[$i]['picture'];
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
	}
	?>
	</div>
	<?php 
		if(count($item) <= 0) {
			echo '<h5 style="color: white">No results found...</h5>';
		} else {
			//SarassA Logo
			echo '<img src="rsrc/index/sarassaalphalogo.png" id="sarassalogo">';
		}
	?>
	<ul class="pagination" align="center">
		<li id="previousPage"><a id="previousPageHref" href="?page=<?php echo($pageIndex)?>"><i style="color: white;" class="material-icons">chevron_left</i></a></li>
		<li style="color: white;" id="currentPage" value="<?php echo($pageIndex +1)?>"><?php echo($pageIndex +1)?></li>
		<li id="nextPage" class="waves-effect"><a href="?page=<?php echo($pageIndex +2)?>"><i style="color: white;" class="material-icons">chevron_right</i></a></li>
	</ul>
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