

<!DOCTYPE html>
<html>
<head>
	<title>Restaurant System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@include('layouts.csslinks')
	
</head>
<body>
	@include('headpage.header')
	<div class="toggle-cart-sidenav">
		<div class="cart">
			<img src="{{ asset('images/sidenav-cart.png') }}">
		</div>
		<div class="add-to-cart-items">
			<div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="slider-conts">
			<div id="slide-container">
			  <img class="slide-image mySlides " src="images/city.jpg" style="display: none;">
			  <div class="sales1 trans1">
			  	<span class="sales2">MEAT & SEAFOOD</span>
					<div class="sales3">FROM BAGSAKAN</div>
					<div class="sales4">We offer a huge variety of exceptionally fresh meat farmed in our personal farm</div>
				<div class="sales5">
					<a href="{{asset('frontpage/shop')}}">
					  <button class="bttn1">Shop Now</button>
					</a>
			  		<button class="bttn2">About Store</button>
			  	</div>
			  </div>
			</div>

			<div id="slide-container">
			  <img class="slide-image mySlides" src="images/city2.jpg" style="display: none;">
			  <div class="sales1 trans2">
			  	<span class="sales2">CUTTING & DELIVERY</span>
					<div class="sales3">QUALITY MONITORING</div>
					<div class="sales4">We offer a huge variety of exceptionally fresh meat farmed in our personal farm</div>
				<div class="sales5">
			  		<button class="bttn1">Shop Now</button>
			  		<button class="bttn2">About Store</button>
			  	</div>
			  </div>
			</div>

			<div id="slide-container">
			  <img class="slide-image mySlides" src="images/city3.jpg" style="display: none;">
			  <div class="sales1 trans3">
			  	<span class="sales2">WILD SALMON</span>
					<div class="sales3">CUTTING & DELIVERY</div>
					<div class="sales4">We offer a huge variety of exceptionally fresh meat farmed in our personal farm</div>
				<div class="sales5">
			  		<button class="bttn1">Shop Now</button>
			  		<button class="bttn2">About Store</button>
			  	</div>
			  </div>
			</div>
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
			<hr class="hr">
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
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
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
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
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
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
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
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
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
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
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
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
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
						<span><strong>Clean Kitchen</strong></span>
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

		@include('headpage.footer')
		
	
	</div>

		

	 	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</body>
</html>


@include('layouts.scripts')

