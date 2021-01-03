

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/bodystyle.css') }}">
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
			<a href="{{asset('frontpage/shop')}}">
			<span class="des3">Shop</span>
			</a>
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
		  <img class="slide-image mySlides " src="images/city.jpg">
		  <div class="sales1 trans">
		  	<span class="sales2">MEAT & SEAFOOD</span>
				<div class="sales3">FROM NORWAY</div>
				<div class="sales4">We offer a huge variety of exceptionally fresh meat farmed in our personal farm</div>
			<div class="sales5">
		  		<button class="bttn1">Shop Now</button>
		  		<button class="bttn2">About Store</button>
		  	</div>
		  </div>
		  <img class="slide-image mySlides" src="images/city2.jpg" >
		  <!-- <div class="sales1 trans">
		  	<span class="sales2">CUTTING & DELIVERY</span>
				<div class="sales3">FROM NORWAY</div>
				<div class="sales4">We offer a huge variety of exceptionally fresh meat farmed in our personal farm</div>
			<div class="sales5">
		  		<button class="bttn1">Shop Now</button>
		  		<button class="bttn2">About Store</button>
		  	</div>
		  </div> -->
		  <img class="slide-image mySlides" src="images/city3.jpg">
		</div>
		
		<div class="sub-container">
			<div class="bsp">Best Selling Products</div>
			<div class="items slider">
				<div class="box slide">
					
					<div class="item-image">
						<div class="prod-image">
							<img src="images/siomai.jpg">
						</div>
						<div class="cart-icon" >
							<a href="#"><img src="images/cart1.png"></a>
						</div>
					</div>
					<div class="item-details">
						<div class="item-name">
							<a href="#"><span class="product-name">Siomai sa Tisa</span></a>
						</div>
						<div class="price-tag">
							<span class="prices">₱150.00</span>
						</div>
					</div>
				</div>
				<div class="box slide">
					<div class="item-image">
						<div class="prod-image">
							<img src="images/pizza.jpg">
						</div>
						<div class="cart-icon" >
							<a href="#"><img src="images/cart1.png"></a>
						</div>
					</div>
					<div class="item-details">
						<div class="item-name">
							<a href="#"><span class="product-name">Pepperoni Pizza</span></a>
						</div>
						<div class="price-tag">
							<span class="prices">₱250.00</span>
						</div>
					</div>
				</div>
				<div class="box slide">
					<div class="item-image">
						<div class="prod-image">
							<img src="images/bread.jpg">
						</div>
						<div class="cart-icon" >
							<a href="#"><img src="images/cart1.png"></a>
						</div>
					</div>
					<div class="item-details">
						<div class="item-name">
							<a href="#"><span class="product-name">Breads Overload</span></a>
						</div>
						<div class="price-tag">
							<span class="prices">₱10.00</span>
						</div>
					</div>
				</div>
				<div class="box slide">
					<div class="item-image">
						<div class="prod-image">
							<img src="images/delisyoso.jpg">
						</div>
						<div class="cart-icon" >
							<a href="#"><img src="images/cart1.png"></a>
						</div>
					</div>
					<div class="item-details">
						<div class="item-name">
							<a href="#"><span class="product-name">Eat All You Can</span></a>
						</div>
						<div class="price-tag">
							<span class="prices">₱300.00</span>
						</div>
					</div>
				</div>
				<div class="box slide">
					<div class="item-image">
						<div class="prod-image">
							<img src="images/siomai.jpg">
						</div>
						<div class="cart-icon" >
							<a href="#"><img src="images/cart1.png"></a>
						</div>
					</div>
					<div class="item-details">
						<div class="item-name">
							<a href="#"><span class="product-name">Siomai sa Tisa</span></a>
						</div>
						<div class="price-tag">
							<span class="prices">₱150.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sub-container2">
			<div class="sc2">Our most popular menus</div>
			<hr style="width: 22%; border: 1px solid #c4a265; margin-left: 68px;">
			<div class="items-container">
				<div class="__item">
					<div class="box2">
						<img src="images/beefsteak.jpg">
					</div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Roasted Beef Steak</span>
							<span class="items-price">150₱</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info"><p>Get half price delivery this</p><p> month on shops over or recommend</p><p> a friend and if they mention your</p><p> account number at the checkout</p><p>get one free delivery!</p></span>
							<div class="select-more"><span class="more">MORE</span></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2"><img src="images/porksteak.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Roasted Pork Steak</span>
							<span class="items-price">150₱</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info"><p>Get half price delivery this</p><p> month on shops over or recommend</p><p> a friend and if they mention your</p><p> account number at the checkout</p><p>get one free delivery!</p></span>
							<div class="select-more"><span class="more">MORE</span></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2"><img src="images/chickenamor.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Roasted Chickenamor</span>
							<span class="items-price">150₱</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info"><p>Get half price delivery this</p><p> month on shops over or recommend</p><p> a friend and if they mention your</p><p> account number at the checkout</p><p>get one free delivery!</p></span>
							<div class="select-more"><span class="more">MORE</span></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2">
						<img src="images/beefsteak.jpg">
					</div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Roasted Beef Steak</span>
							<span class="items-price">150₱</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info"><p>Get half price delivery this</p><p> month on shops over or recommend</p><p> a friend and if they mention your</p><p> account number at the checkout</p><p>get one free delivery!</p></span>
							<div class="select-more"><span class="more">MORE</span></div>
						</div>
					</div>
				</div>

				<div class="__item">
					<div class="box2"><img src="images/porksteak.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Roasted Pork Steak</span>
							<span class="items-price">150₱</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info"><p>Get half price delivery this</p><p> month on shops over or recommend</p><p> a friend and if they mention your</p><p> account number at the checkout</p><p>get one free delivery!</p></span>
							<div class="select-more"><span class="more">MORE</span></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2"><img src="images/chickenamor.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Roasted Chickenamor</span>
							<span class="items-price">150₱</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info"><p>Get half price delivery this</p><p> month on shops over or recommend</p><p> a friend and if they mention your</p><p> account number at the checkout</p><p>get one free delivery!</p></span>
							<div class="select-more"><span class="more">MORE</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-container3">
			<div class="container quality-cont">
				<img src="{{asset('images/bg-image-1.jpg')}} " >
				<div class="centered">Quality Food Ingredients</div>
			</div>
		
		</div >
		<div class="sub-container4">
			<div class="page-wrapper">
				<div class="f-icon">
					<a href="#">
						<img class ="icon1" src="{{asset('images/wine.svg')}} " >
					</a>
						<span><strong>Food & Drinks</strong></span>
						<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
						<button class="buttoncat">See Menu</button>
				</div>
				<div class="f-icon">
					<a href="#">
						<img class ="icon1" src="{{asset('images/oven.svg')}} " >
					</a>
					<span><strong>Clean Kitchen</strong>
					<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
					<button class="buttoncat">Meet our Team</button>
					
				</div>
				<div class="f-icon">
					<a href="#">
						<img class ="icon1" src="{{asset('images/placeholder.svg')}} " >
					</a>
					<span><strong>Awesome Locations</strong></span>
					<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
					<button class="buttoncat">Find our Stores</button>
				</div>
				<div class="f-icon">
					<a href="#">
						<img class ="icon1" src="{{asset('images/ingredients.svg')}} " >
					</a>
					<span><strong>Healthy Ingredients</strong></span>
					<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
					<button class="buttoncat">See Ingredients</button>
				</div>
			</div>
		</div>
		</div>
		<div id="footer" class="footer-section">
			<div class="footer-container">
				<div class="footer-company">
					<div class="footer-logo">
						<span class="des-logo">
							<img src="images/logo.png" class="footer-logos">
						</span>
						<div class="name-title">
							<span class="des1">Karne De Lame</span>
							<div class="des2">Fresh Meats</div>
						</div>
					</div>
					<div class="footer-info">
						<div class="info-paragraph">
							New to the store are our bags of mixed dried berries. A perfect healthy snack or a nice topping for your cereal in the morning. We are a specialist food retailer and we have
						</div>
					</div>
				</div>
				<div class="footer-tweets">
					<div class="footer-title-tweets">
						<span class="footer-title">Latest Tweets</span>
					</div>
					<div class="footer-tweet-time">
						<span><i>30 minutes ago</i></span>
					</div>
				</div>
				<div class="footer-gallery">
					<div>
						<span class="footer-title">Restaurant Gallery</span>
					</div>					
				</div>
				<div class="footer-contact-us">
					<div class="footer-contact">
						<span class="footer-title">Contact Us</span>
					</div>
					<div class="footer-contact-info">
						<span><b>Tel :</b>	+123456789</span>
						<span><b>Phone :</b>	987654321</span>
						<span><b>Fax :</b>	5455555</span>
						<span><b>Email :</b>	info@yourdomain.com</span>
						<span><b>Address :</b>	12453 Avenue NYC, New York City, NYC, 98741</span>
						<span><b>Website :</b>	http://themexlab.com</span>
					</div>					
				</div>
			</div>
		</div>
	</div>
	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
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
  dots: true,
  // customPaging : function(slider, i) {
  //       return '<ul><li role="presentation></li><li role="presentation" class="slick-active"></li></ul>';},
  infinite: true,
  speed: 1500,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// $(document).ready(function(){
// 	$('.item-image').hover(function(){
// 		$(this).each(function(){
// 			// alert(1);
// 			$('.cart-icon').show();
// 		});
// 	});
// });

// $(document).ready(function(){
//     $(".__item").hover(function(){
//     	$('.items-price').each(function(){
//         $(this).css("background", "#a11001");
//         })
//     },
//     function(){
//         $('.items-price').css("background", "#f6f4f2");
//     });
// });

</script>

