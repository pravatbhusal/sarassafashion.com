<html>
<body>
<header>
	<title>SarassA Fashion | Buy Cultural Fashion Online USA</title>
	<!--style.css, favcon, googlefont, materializecss-->
	<link href="styles/index_style.css" type="text/css" rel="stylesheet">
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
		<a href="" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">New Arrivals</a>
		<a href="" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Women's Clothing</a>
		<a href="" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Men's Clothing</a>
		<a href="" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Jewelry</a>
		<a href="" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Sales</a>
		<a href="events.php" style="margin-right: 20px;" class="waves-effect waves-light btn" id="link-btn">Events</a>
	</div>
	
	<div class="container" style="margin: auto">
  	<!-- Photo Carousel -->
    <div class="carousel carousel-slider center" data-indicators="true">
		<a class="carousel-item" href="#one!"><img src="rsrc/index/caro1.jpg"></a>
		<a class="carousel-item" href="#two!"><img src="rsrc/index/caro2.jpg"></a>
		<a class="carousel-item" href="#three!"><img src="rsrc/index/caro3.jpg"></a>
		<a class="carousel-item" href="#four!"><img src="rsrc/index/caro4.jpg"></a>
	</div>
  
    <!-- Shipping Prices -->
    <p class="center-align" id="shipping-text">EVERYDAY FLAT RATE SHIPPING U.S. $7.95 AND CANADA $15.00</p>
  	
	<!-- Item Links -->
    <div class="row" align="center">
      <div class="col s12 m12 l4 xl4">
			<a href=""><img class="hoverable" id="three-item-photo" src="https://img0.etsystatic.com/184/1/6120089/il_340x270.1322013606_k53l.jpg"></a>
	  </div>
	  <div class="col s12 m12 l4 xl4">
			<a href=""><img class="hoverable" id="three-item-photo" src="https://i.pinimg.com/736x/b7/a9/87/b7a9878aa3cc7a1ae5408bcdf7f038cb.jpg"></a>
	  </div>
	  <div class="col s12 m12 l4 xl4">
			<a href=""><img class="hoverable" id="three-item-photo" src="https://i.pinimg.com/736x/7e/ea/a8/7eeaa88ddf12161474a204093950d5ea.jpg"></a>
	  </div>
    </div>
	
	<!-- About SarrassA Fashion -->
    <p class="center-align" id="about-title-text">SarassA Fashion</p>
	<p class="center-align"><i class="material-icons" style="color: white; font-size: 4rem;">graphic_eq</i></p>
	<p class="center-align" id="about-text">
	Coming Soon...
	</p>
	<hr>
	
	<!-- New Products + Show More -->
	<p class="center-align" id="new-title-text">New Products</p>
	<p align="center"><a href="new.php" class="waves-effect waves-light btn" style="background-color: black">Show More</a></p>
  </div>
	
	<!--SarassA Logo-->
	<img src="rsrc/index/sarassaalphalogo.png" id="sarassalogo">
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
  $('.carousel.carousel-slider').carousel();
</script>
</body>
</html>