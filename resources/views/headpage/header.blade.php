
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
		<form action="{{route('search')}}" method="GET">
			<span class="inputs">
					<input autocomplete="off" type="text" onkeyup="mySearchFunction(this.id)" name="query" id="query" placeholder="Search products..." class="inpt-search"> 
					<button class="btn-search">Search</button>

					<ul id="myUL">
						
					</ul>
			</span>
		</form>

		</div>
		
		<div class="icons">
			<span class="search-icon" >
				<img src="{{asset('images/search-icon.png')}}">
			</span>
			<div class="add-to" >
				<a href="{{asset('frontpage/cartpage')}}" >
					<img src="{{asset('images/cart.png')}}" class="icons3" title="Your Cart">
					<a href="#" class="notification-cart" id="numb-item" style="display:none;">
						<span class="badge2" id="badge2">0</span>
					</a>
				</a>
			</div>

		 @if(Auth::check())
				<div class="dropdown-account">
					<span class="account-c ">
				
						@if($value[0]->utype == 'User')
					

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
			<a href="#" class="notification-cart" id="numb-item" style="display:none;">
				<span class="badge" id="badge">0</span>
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
							<span><h3>Subtotal :</h3></span><span><h3 class="sub_tot"></h3></span>
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
		subTotal();
		function subTotal(){
				var sum = Number($(this).text());
			$('.substotals').each(function(){
				sum += Number($(this).text());
			});
			$('.sub_tot').text(sum);
		}
		var url = window.location.origin;
		cartedItems();
		$('.cart').click(function(e){
			e.preventDefault();
				subTotal();	
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
						var count_item=0;
						$.each(data, function(i, item){
						count_item++
							var numb = parseFloat(item.price).toFixed(2);
								$('.item-on-cart').append(`
								<div class="carted-item-cont" id="cart-item-cont${item.cart_id}">
									<div class="cart-product-cont">
										<img src="${item.images}">
										<span class="item-name"><p style="margin: 0;padding:0;">${item.name}</p></span>
									</div>
									<div class="carted-item">
										<div class="item-subtotal">
											<div class="sub-price">
												<input type="hidden" class="cart-tot-price${item.cart_id}" value="${item.price}">
												₱ <span class="cart-sub-price${item.cart_id}">${numb}</span> x
											</div>
											<div  class="cart-input">
												<button  type="button" class="qty-dec" onclick="dec('qty',${item.cart_id})">-</button>
													<input class="cartQty__${item.cart_id}" type="number" value="${item.quantity}" name="qty">
												<button type="button" class="qty-inc" onclick="inc('qty',${item.cart_id})">+</button>
											</div>
											<div class="item-sub">
												<span class="substotal${item.cart_id}">Total:<span class="substotals">${item.price}</span></span>
											</div>
										</div>
									</div>
									<span class="delete-item" onclick="al.deleteItemCart(${item.cart_id})">&times</span>
								</div>
								`);
						});
						$( "#badge" ).text( count_item );
						$('#badge2').text( count_item );
						// Carting();
					}
					}
			});
		}
	});


$(document).ready(function(){
	
Carting();	

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
					$('.shop-items-conts-col').empty();
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
					Carting();
					
				}
			});
			
		});
	});
@if(Auth::check())	
	function Carting(){ 
		
		$('.addToCart').each(function(){
		var carted = $(this).data('value');
		var url = window.location.origin;
			$(this).on('click', function(e){
				e.preventDefault();
				// alert(carted);
				addCart();
				subTotal();
				
			});
		
			
		function addCart(){
			$( ".notification-cart" ).show();
			var text = $( "#badge" ).text();
			var text2 = $( "#badge2" ).text();
			text++;
			text2++;
			$( "#badge" ).text( text );
			$( "#badge2" ).text( text2 );
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
						// $( "#badge" ).text( text );
							
						}
					}
				});
		}
	});
}
		
@endif
});
// $(document).ready(function(){
//   $('.btn-search').on('click',function(){
//     alert('search');
//   });
// });
function mySearchFunction(id) {
	var input = $('#'+id).val();
	// console.log(input);
	var url = window.location.origin;
	var n = input.length;
	if(n > 0 ) {

		$.ajax({
		headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		type:'POST',
		url: url+'/search-products',
		data:{item:input},
		success:function(data)
			{	
				// console.log(data);
				$('#myUL').empty();
				if(data==false) {
					$('#myUL').append(`
							<li><a href="">No record found...</a></li>
						`);
				}else{
					$.each(data, function(i, item){
						$('#myUL').append(`
							<li><a href="${url+'/search?query='+item.name}">${item.name}</a></li>
						`);
					});
				}
			}
		});

	} else {
		$('#myUL').empty();
	}
	
}
</script>
