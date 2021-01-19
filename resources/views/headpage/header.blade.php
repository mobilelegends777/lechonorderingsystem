
<div class="header-container">
	<div class="headmenu">
	<div class="company-logo">
		<span class="des-logo">
            <a href="/">
            <img src="{{asset('images/mjlogo.png')}}" class="logos">
            </a>
		</span>
		<div class="company-title">
		<a href="/">
			<span class="des1">MJ Lechon House</span>
			<div class="des2">Tasty, Juicy & Crispy</div>
			</a>
		</div>
	</div>
		<div class="sub-menu">
			<div class="dropdown">
				<a href="{{asset('/')}}">
					<span class="des3">Home</span>
				</a>
			</div>
			<span class="dropdown">
			<a href="{{asset('frontpage/shop')}}">
					<span class="des4">Shop</span>
				</a>
			</span>

			<span class="dropdown">
				<span class="des5">Special Order <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="{{asset('frontpage/special-order')}}">Lechon</a>
				</div>
			</span>
			<span class="dropdown">
				<span class="des6">Menu<img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="{{asset('frontpage/newproduct')}}">New Products</a>
				  <a href="{{asset('frontpage/combomeal')}}">Combo Meals</a>
				  <a href="{{asset('frontpage/dessert')}}">Desserts</a>
				  <a href="{{asset('frontpage/drinks')}}">Drinks</a>
				  <a href="{{asset('frontpage/appetizer')}}">Appetizers</a>
				</div>
			</span>
			<span class="dropdown">
				<a href="{{asset('frontpage/contact')}}">
				<span class="des7">Contact Us </span>
				</a>
			</span>
		</div>
		<div class="icons-inputs">
			<span class="inputs">
				<input type="text" name="" placeholder="Search products..." class="inpt-search">
				<button class="btn-search">Search</button>
			</span>
		</div>
		<!-- mobile nav -->
		<div class="mobile-menu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true" onclick="myFunction()">
				<span>&#9776;&nbsp;Menu</span>
			</button>
		</div>
		
		<div class="icons">
			<span class="search-icon" >
				<img src="{{asset('images/search-icon.png')}}">
			</span>
			<span class="add-to" >
			<a href="{{asset('frontpage/cartpage')}}" >
				<img src="{{asset('images/cart.png')}}" class="icons3" title="Your Cart">
				</a>
			</span>

		 @if(Auth::check())
				<div class="dropdown-account">
					<span class="account-c ">
				
						@if($value[0]['utype'] == 'User')
					

							<img src="{{asset('images/account.png')}}" class="icons2">
								<div class="dropdown-content-account">

										<a href="{{asset('/userpage/myorder')}}">My Order</a>
										<a href="{{asset('userpage/myprofile')}}">Edit Profile</a>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												{{ __('Logout') }}</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
									</div>
				

						@else
							<img src="{{asset('images/user.png')}}" class="icons2 d-arrow">					
								<div class="dropdown-content-account">

									<a href="{{asset('/u-login')}}">Login</a>
									<a href="{{asset('/u-login')}}">SignUp</a>
								</div>
						
								
					@endif
					</span>
				</div>
			@else
				<div class="dropdown-account">
					<span class="account-c ">
							<img src="{{asset('images/user.png')}}" class="icons2 d-arrow">					
									<div class="dropdown-content-account">

										<a href="{{asset('/u-login')}}">Login</a>
										<a href="{{asset('/u-login')}}">SignUp</a>
							</div>
					</span>
				</div>
		@endif
		</div>
	</div>
</div>
	<div class="topnav subtop" id="myTopnav">
		<div class="ordinary">
			<a href="{{asset('/')}}">Home</a>
		</div>
    	<div class="ordinary dropbtn1">

    		<a href="#">Fish <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"> </a>
	    		<div id="myDropdown" class="drpdwn seafoodDrp" style="display:none;">
				    <a href="#home">Sea Food</a>
				</div>

    	</div>
    	<div class="ordinary">
			
				  <a href="{{asset('frontpage/special-order')}}">Special Order</a>
			
	
		 </div>
    	<div class="ordinary dropbtn2">
    		<a href="#">Menu <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>
	    		<div id="myDropdown" class="drpdwn meatDrp" style="display:none;">
					  <a href="{{asset('frontpage/newproduct')}}">New Products</a>
					  <a href="{{asset('frontpage/combomeal')}}">Combo Meals</a>
					  <a href="{{asset('frontpage/dessert')}}">Desserts</a>
					  <a href="{{asset('frontpage/drinks')}}">Drinks</a>
					  <a href="{{asset('frontpage/appetizer')}}">Appetizers</a>
				</div>
		 </div>
    	<div class="ordinary">
    		<a href="#">About Us <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>

    	</div>
	    <div class="ordinary"><a href="{{asset('frontpage/contact')}}">Contact Us</a>
	    </div>

	</div>
<!-- end mobile toggles -->
	<!-- modals -->
		
		
		<div class="__search" id="my-searches" style="display:none">
			<span>
				<div class="search-area">
						<input type="text" name=""><button>Search</button>
				</div>
				<div class="back-search">
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
				</div>
			</span>
		</div>
@if(Auth::check())	
		<div class="toggle-cart-sidenav">
			<div class="cart">

				<img src="{{ asset('images/sidenav-cart.png') }}"><span class="cart-title" style="display: none;">Your Cart</span>

			</div>
			<div class="add-to-cart-items">
				<div class="items-on-cart-container" style="display: none;">
					<div class="item-on-cart">
						<!-- append -->
				
					<div class="carted-item-cont">
							<span>
								<img src="{{ asset('images/loin1.jpg') }}">
							</span>
							<span class="carted-item">
								<span class="item-name"><h4 style="margin: 0;padding:0;">ITEM-1</h4></span>
								<span class="item-subtotal">
									<span class="quantity">1 x</span>
									<span class="sub-price">5.00</span>
								</span>
							</span>
							<span class="delete-item">&times</span>
						</div>
						<div class="carted-item-cont">
							<span>
								<img src="{{ asset('images/loin2.jpg') }}">
							</span>
							<span class="carted-item">
								<span class="item-name"><h4 style="margin: 0;padding:0;">ITEM-2</h4></span>
								<span class="item-subtotal">
									<span class="quantity">1 x</span>
									<span class="sub-price">5.00</span>
								</span>
							</span>
							<span class="delete-item">&times</span>
						</div>
						<div class="carted-item-cont">
							<span>
								<img src="{{ asset('images/loin3.jpg') }}">
							</span>
							<span class="carted-item">
								<span class="item-name"><h4 style="margin: 0;padding:0;">ITEM-3</h4></span>
								<span class="item-subtotal">
									<span class="quantity">1 x</span>
									<span class="sub-price">5.00</span>
								</span>
							</span>
							<span class="delete-item">&times</span>
						</div>
						<div class="carted-item-cont">
							<span>
								<img src="{{ asset('images/loin1.jpg') }}">
							</span>
							<span class="carted-item">
								<span class="item-name">ITEM-4</span>
								<span class="item-subtotal">
									<span class="quantity">1 x</span>
									<span class="sub-price">5.00</span>
								</span>
							</span>
							<span class="delete-item">&times</span>
						</div>
				
					</div>
					<div class="subtotal-cont">
						<div class="sub-numbers" style="color: #666;display: flex;">
							<span><h3>Subtotal :</h3></span><span><h3>15.00</h3></span>
						</div>
					</div>
					<div class="__bottons">
						<div class="check-out-sidbar">
							<a href="{{asset('frontpage/checkout')}}">
							<button class="checkout-button">Checkout</button>
							</a>
						</div>
						<div class="view-cart-sidebar">
						<a href="{{asset('/frontpage/cartpage')}}">
							<button class="view-cart-button">View Cart</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endif