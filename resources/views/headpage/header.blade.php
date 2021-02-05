
<div class="header-container">
	<div class="headmenu" id="headers">
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
			<div class="dropdown">
				<span class="des5">Special Order <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="{{asset('frontpage/special-order')}}">Whole Lechon</a>
				  <a href="{{asset('frontpage/special-order')}}">Lechon Belly</a>
				  <a href="{{asset('frontpage/special-order')}}">Available per Kilo</a>
				</div>
			</div>
			<div class="dropdown">
				<a href="{{asset('frontpage/shop')}}">
					<span class="des4">Menu</span>
				</a>
			</div>
			{{--<div class="dropdown">
				<span class="des6">Menu<img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="{{asset('frontpage/newproduct')}}">New Products</a>
				  <a href="{{asset('frontpage/combomeal')}}">Combo Meals</a>
				  <a href="{{asset('frontpage/dessert')}}">Desserts</a>
				  <a href="{{asset('frontpage/drinks')}}">Drinks</a>
				  <a href="{{asset('frontpage/appetizer')}}">Appetizers</a>
				</div>
			</div>--}}
			<div class="dropdown">
				<a href="{{asset('frontpage/contact')}}">
				<span class="des7">Contact Us </span>
				</a>
			</div>
		</div>
		<div class="icons-inputs">
			<span class="inputs">
			
				<input type="text" name="" placeholder="Search products..." class="inpt-search"> 
				<button class="btn-search">Search</button>
			</span>
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
				
						@if($value[0]->utype == 'User')
					
						<div class="dropdown">
							<span class="des5"><img src="{{$value[0]->images}}" class="icons2"><img src="{{asset('images/down-arrow.png')}}" class="d-arrow dar"></span>
						</div>
								<div class="dropdown-content-account">
									<h6>Signed in as <br></h6>
									<h5><strong>{{$value[0]->email}}</strong></h5>
									<hr>
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
		<!-- mobile nav -->
				<div class="mobile-menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true" onclick="myFunction()">
						<span>&#9776;</span>
					</button>
				</div>
		</div>
	</div>
</div>
	<div class="topnav subtop" id="myTopnav">
		<div class="ordinary">
			<a href="{{asset('/')}}">Home</a>
		</div>
    	<div class="ordinary dropbtn1">
    		<a href="{{asset('frontpage/shop')}}">Menu</a>
    	</div>
    	<div class="ordinary dropbtn2">
			  <a href="#">Special Order <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>
			  <div id="myDropdown" class="drpdwn meatDrp" style="display:none;">
					  <a href="{{asset('frontpage/special-order')}}">Whole Lechon</a>
					  <a href="{{asset('frontpage/special-order')}}">Lechon Belly</a>
					  <a href="{{asset('frontpage/special-order')}}">Available per Kilo</a>
				</div>
	 	</div>
    	<!-- <div class="ordinary dropbtn2">
    		<a href="#">Menu <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>
	    		<div id="myDropdown" class="drpdwn meatDrp" style="display:none;">
					  <a href="{{asset('frontpage/newproduct')}}">New Products</a>
					  <a href="{{asset('frontpage/combomeal')}}">Combo Meals</a>
					  <a href="{{asset('frontpage/dessert')}}">Desserts</a>
					  <a href="{{asset('frontpage/drinks')}}">Drinks</a>
					  <a href="{{asset('frontpage/appetizer')}}">Appetizers</a>
				</div>
		 </div> -->
    	<!-- <div class="ordinary">
    		<a href="#">About Us <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>

    	</div> -->
	    <div class="ordinary"><a href="{{asset('frontpage/contact')}}">Contact Us</a>
	    </div>

	</div>
<!-- end mobile toggles -->
	<!-- modals -->
		
		
		<div class="__search" id="my-searches" style="display:none">
			<div class="search-bar-cont">
				<div class="search-area">
						<input type="text" name=""><button>Search</button>
				</div>
				<div class="back-search">
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
				</div>
			</div>
		</div>
@if(Auth::check())	
		<div class="toggle-cart-sidenav">
			<div class="cart">
			<a href="#" class="notification-cart" id="numb-item">
				
			</a>
				<img src="{{ asset('images/sidenav-cart.png') }}"><span class="cart-title" style="display: none;">Your Cart</span>

			</div>
			<div class="add-to-cart-items">
				<div class="items-on-cart-container" style="display: none;">
					<div class="item-on-cart">
						<!-- append -->
						
							<!-- append item here -->
						
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
<script>


	$(document).ready(function(){
		var url = window.location.origin;
		cartedItems();
		$('.cart').click(function(e){
			e.preventDefault();
				cartedItems();
		});
	function cartedItems(){
		
			$.ajax({
				headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				type:'POST',
				url: url+'/view-carted',
				data:{data:''},
				success:function(data)
					{
						// console.log(data);
						if(data == false){
							$('.item-on-cart').empty();
							$('.item-on-cart').append(`
								<div class="cart-empty">
									<h3>Your Cart is empty!!</h3>
								</div>
							`);
						}else{

						
						$('.item-on-cart').empty();
						$.each(data, function(i, item){
							
								$('.item-on-cart').append(`
								<div class="carted-item-cont" id="cart-item-cont${item.cart_id}">
									<span>
										<img src="${item.images}">
									</span>
									<span class="carted-item">
										<span class="item-name"><h4 style="margin: 0;padding:0;">${item.name}</h4></span>
										<span class="item-subtotal">
											<span class="quantity">${item.quantity} x</span>
											<span class="sub-price">${item.price}</span>
										</span>
									</span>
									<span class="delete-item" onclick="al.deleteItemCart(${item.cart_id})">&times</span>
								</div>
								`);
						});
					}
					}
			});
		}
	});


	$(document).ready(function(){


	
Carting();	
	$('.filter-by-price').on('click', function(){
		alert("unya pa nako ni buhatun"+"mao ni ang minimum "+$( "#slider-range" ).slider( "values", 0 )+" "+"mao ni ang max "+$( "#slider-range" ).slider( "values", 1 ));
	});

	$('.catType').each(function(){
		var cat = $(this).data('value');
		var url = window.location.origin;
		
		$(this).on('click', function(e){
			e.preventDefault();
			$.ajax({
				headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				type:'POST',
				url: url+'/filter-foods',
				data:{category:cat},
				success:function(data)
				{
					
					$('.shop-items-conts').empty();
					// console.log(data);
					$.each(data, function(i, item){
							
							$('.shop-items-conts').append(`
								<div class="shop-items">
									<div class="shop-item-image">
										<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
											<img src="${item.images}">
										</a>
										<div class="cartIcon${item.product_id} cart-icon">
											<a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a href="">
										</div>
									</div>
									<div class="shop-info-price">
										<div class="shop-item-name">${item.name}</div>
										<div class="shop-item-price">₱${item.price}</div>
									</div>
								</div>
							`);
					});
					Carting();
					
					$.each(data, function(i, item){
							
							$('.shop-items-conts-col').append(`
							<div class="shop-items shop-item-col shop-cols">
								<div class="shop-item-image">
									<a href="#">
										<img class="shop-imgs" src="${item.images}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col shop-info-prices">
									<div class="shop-item-name-info shop-items-names">
										<div class="shop-item-name-col shop-name-col shop-itemname-cols">
											<span class="col-item-title col-names">${item.name}</span>
											<div class="parag col-parags">
												<div>${item.description}</div>
											</div>
										</div>
										<div class="shop-item-info shop-carts">
											<div class="col-price carts-price1">
												<div class="shop-item-price prod-price">₱${item.price}</div>
												<div class="shop-left">
													<button class="addcart cols-cart"><i class="fa fa-cart-plus"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							`);
	
					});
					
				}
			});
			
		});
	});
@if(Auth::check())	
function countItem(){
	var num_item = $('.carted-item-cont').length;
	console.log(num_item);
		$('#numb-item').empty();
		$('#numb-item').append(`
			<span class="badge" >${ num_item+1 }</span>
		`)
}
countItem();
	function Carting(){ 
		
		$('.addToCart').each(function(){
		var carted = $(this).data('value');
		var url = window.location.origin;
			$(this).on('click', function(e){
				e.preventDefault();
				// alert(carted);
				addCart();
				countItem();
			});
		
			
		function addCart(){
				$.ajax({
				headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				type:'POST',
				url: url+'/add-to-cart-item',
				data:{carted:carted},
				success:function(data)
					{	
						if(data == true){
							$('.cartIcon'+carted).empty();
							$('.cartIcon'+carted).append(`
								<span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
							`)
						}
					}
				});
		}
	});
}
		
@endif
});
</script>