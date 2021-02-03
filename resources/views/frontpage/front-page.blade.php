@extends('index')
@section('page_content')

		<div class="slider-conts">
			<div id="slide-container">
			  <img class="slide-image mySlides " src="asset/home/8.jpg" style="display: none;">
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
			  <img class="slide-image mySlides" src="asset/home/2.jpg" style="display: none;">
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
			  <img class="slide-image mySlides" src="asset/home/1.jpg" style="display: none;">
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
					@foreach($value[1] as $item)
						<div class="box slide">
							<div class="item-image">
								<div class="prod-image">
									<img src="{{$item->images}}">
								</div>
								<div class="cart-icon" >
									<input type="hidden" name="product" id="" value="{{$item->product_id}}">
									<a href="#"><img src="images/cart1.png"></a>
								</div>
							</div>
							<div class="item-details">
								<div class="item-name">
									<a href="#"><span class="product-name">{{$item->name}}</span></a>
								</div>
								<div class="price-tag">
									<span class="prices">₱{{ number_format($item->price,2)}}</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
		</div>

		<div class="sub-container2">
			<div class="sc2">Our most popular menus</div>
			<hr class="hr">
			<div class="items-container">
				<div class="__item">
					<div class="box2">
						<img src="asset/Combo/A1.jpg">
					</div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">A1. 2Pcs Pork BBQ & Rice</span>
							<span class="items-price">₱77</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info">Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</span>
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2"><img src="asset/Combo/A2.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">A2. Chicken BBQ Paa & Rice</span>
							<span class="items-price">₱116</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info">Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</p></span>
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2"><img src="asset/Combo/A3.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">A3. Chicken BBQ Breast & Rice</span>
							<span class="items-price">₱129</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info">Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</p></span>
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2">
						<img src="asset/New/Lechonrice.jpg">
					</div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Lechon Rice</span>
							<span class="items-price">₱50</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info">Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</p></span>
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
						</div>
					</div>
				</div>

				<div class="__item">
					<div class="box2"><img src="asset/New/Liempo.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Liempo</span>
							<span class="items-price">₱254</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info">Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</p></span>
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
						</div>
					</div>
				</div>
				<div class="__item">
					<div class="box2"><img src="asset/New/Lechonbaboy.jpg"></div>
					<div class="box3">
						<div class="box3-details">
							<span class="product-title">Lechon</span>
							<span class="items-price">₱254</span>
						</div>
						<div class="box3-info">
							<span class="box3-item-info">Get half price delivery this month on shops over or recommend a friend and if they mention your account number at the checkout get one free delivery!</p></span>
							<div class="select-more"><a href="#"><span class="more">MORE</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-container3">
			<div class="quality-cont">
				<img src="{{asset('images/bg-image-1.jpg')}} " >
				<div class="centered"><span>Quality Food Ingredients</span></div>
			</div>
		</div>
		<div class="sub-container4">
			<div class="page-wrapper">
				<div class="f-icon">
					<div class="qual-icon-cont">
						<a href="#" class ="icon1">
							<img  src="{{asset('images/wine.svg')}} " >
						</a>
							<span><strong>Food & Drinks</strong></span>
							<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
							<a href="{{asset('frontpage/shop')}}">
							<button class="buttoncat">See Menu</button>
							</a>
					</div>
				</div>
				<div class="f-icon">
					<div class="qual-icon-cont">
						<a href="#" class ="icon1">
							<img  src="{{asset('images/oven.svg')}} " >
						</a>
							<span><strong>Clean Kitchen</strong></span>
							<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
							<a href="{{asset('frontpage/contact')}}">
							<button class="buttoncat">Meet our Team</button>
							</a>
					</div>
					
				</div>
				<div class="f-icon">
					<div class="qual-icon-cont">
						<a href="#" class ="icon1">
							<img  src="{{asset('images/placeholder.svg')}} " >
						</a>
							<span><strong>Awesome Locations</strong></span>
							<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
							<a href="{{asset('frontpage/contact')}}">
							<button class="buttoncat">Find our Stores</button>
							</a>
					</div>
				</div>
				<div class="f-icon">
					<div class="qual-icon-cont">
						<a href="#" class ="icon1">
							<img  src="{{asset('images/ingredients.svg')}} " >
						</a>
							<span><strong>Healthy Ingredients</strong></span>
							<p>If you visit one of our stores during the first week of next month you will see our cashiers taking part in a sponsored juggle</p>
							<a href="{{asset('frontpage/shop')}}">
							<button class="buttoncat">See Ingredients</button>
							</a>
					</div>
				</div>
			</div>
		</div>

	@endsection