@section('title', 'Restaurant system')

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/header.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="headmenu">
		<span class="des-logo">
			<img src="images/logo.png" class="logos">
		</span>
		<span class="des1">Karne De Lame</span>
		<div class="des2">Fresh Meats</div>
		<span class="sub-menu">
			<span class="des3">Shop</span>
			<span class="dropdown">
				<span class="des4">Fish <img src="images/down-arrow.png" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="#">Sea Food</a>
				</div>
			</span>

			<span class="dropdown">
				<span class="des5">Meat <img src="images/down-arrow.png" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="#">Rabbit</a>
				  <a href="#">Beef</a>
				  <a href="#">Pork</a>
				  <a href="#">Chicken</a>
				  <a href="#">Lamb</a>
				</div>
			</span>
			
			<span class="des6">About Us <img src="images/down-arrow.png" class="d-arrow"></span>
			<span class="des7">Blocks <img src="images/down-arrow.png" class="d-arrow"></span>
		</span>
		<span class="inputs">
			<input type="text" name="" placeholder="Search products..." class="inpt-search">
			<button class="btn-search">Search</button>
		</span>
		<div class="icons">
			
			<span>
				<img src="images/cart.png" class="icons3" title="Your Cart">
			</span>
			<div class="dropdown">
			<span class="account-c ">
				<img src="images/user.png" class="icons2">

				<div class="dropdown-content">
					<a href="{{asset('/login')}}">Login</a>
   				 	<a href="{{asset('/register')}}">Register</a>
   
 				</div>
			</span>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="slide-container">
		  <img class="slide-image mySlides" src="images/city.jpg" >
		  <img class="slide-image mySlides" src="images/city2.jpg" >
		  <img class="slide-image mySlides" src="images/city3.jpg">
		</div>

		<div class="sub-container">
			<div class="bsp">Best Selling Products</div>
			<div class="items slider">
				<div class="box slide"><img src="images/siomai.jpg"></div>
				<div class="box slide"><img src="images/pizza.jpg"></div>
				<div class="box slide"><img src="images/bread.jpg"></div>
				<div class="box slide"><img src="images/delisyoso.jpg"></div>
			</div>
		</div>

		<div class="sub-container2">
			<div class="sc2">Our most popular menus</div>
			<hr style="width: 22%; border: 1px solid #c4a265; margin-left: 68px;">
			<div class="box2"><img src="images/beefsteak.jpg"></div>
			<div class="box2"><img src="images/porksteak.jpg"></div>
			<div class="box2"><img src="images/chickenamor.jpg"></div>
			<div class="box3">
				<span>Roasted Beef Steak</span>
				<div>Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</div>
			</div>
			<div class="box3">
				<span>Roasted Pork Steak</span>
				<div>Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</div>
			</div>
			<div class="box3">
				<span>Roasted Chickenamor</span>
				<div>Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</div>
			</div>
		</div>
	</div>

</body>
</html>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);
}



</script>
<script>
	$('.slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
</script>

