
<div class="headmenu">
	<div class="company-logo">
		<span class="des-logo">
            <a href="/">
            <img src="{{asset('images/logo.png')}}" class="logos">
            </a>
		</span>
		<div class="company-title">
		<a href="/">
			<span class="des1">MJ Lechon</span>
			<div class="des2">Fresh Lechon</div>
			</a>
		</div>
	</div>
		<span class="sub-menu">
			<div class="dropdown">
				<a href="{{asset('frontpage/shop')}}">
					<span class="des3">Shop</span>
				</a>
			</div>
			<span class="dropdown">
				<span class="des4">Fish <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="#">Sea Food</a>
				</div>
			</span>

			<span class="dropdown">
				<span class="des5">Meat <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="#">Rabbit</a>
				  <a href="#">Beef</a>
				  <a href="#">Pork</a>
				  <a href="#">Chicken</a>
				  <a href="#">Lamb</a>
				</div>
			</span>
			
			<span class="dropdown">
				<span class="des6">About Us <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="{{asset('frontpage/contact')}}">Contact</a>
				  <a href="#">Story</a>
				</div>
			</span>
			<span class="dropdown">
				<span class="des7">Blocks <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="#">Blocks 1</a>
				  <a href="#">Blocks 2</a>
				  <a href="#">Blocks 3</a>
				  <a href="#">Blocks 4</a>
				</div>
			</span>
		</span>
		<span class="inputs">
			<input type="text" name="" placeholder="Search products..." class="inpt-search">
			<button class="btn-search">Search</button>
		</span>
		<!-- mobile nav -->
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true" onclick="myFunction()">
			<span>&#9776;&nbsp;Menu</span>
		</button>
		<div class="icons">
			<span class="search-icon" >
				<img src="{{asset('images/search-icon.png')}}">
			</span>
			<span class="add-to">
			<a href="{{asset('frontpage/cartpage')}}">
				<img src="{{asset('images/cart.png')}}" class="icons3" title="Your Cart">
				</a>
			</span>
			<div class="dropdown">
				<span class="account-c ">
					<img src="{{asset('images/user.png')}}" class="icons2">				
						@if($data["utype"] == "User")
							<div class="dropdown-content">
								<a href="{{asset('/frontpage/myprofile')}}">Account</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                  				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
							</div>
						@else
						
							<div class="dropdown-content">
								<a href="{{asset('/u-login')}}">Login</a>
								<a href="{{asset('/u-login')}}">Register</a>
							</div>
							@endif
				</span>
			</div>
		</div>
	</div>
	<div class="topnav subtop" id="myTopnav">
		<div class="ordinary">
			<a href="#">Shop</a>
		</div>
    	<div class="ordinary dropbtn1">
    		<a href="#">Fish <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"> </a>
    	</div>
    	<div class="ordinary dropbtn2">
    		<a href="#">Meat <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>
		 </div>
    	<div class="ordinary">
    		<a href="#">About Us <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>
    	</div>
	    <div class="ordinary"><a href="#">Blocks
	    	<img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></a>
	    </div>

	</div>
	<!-- modals -->
		<div id="myDropdown" class="drpdwn seafoodDrp" style="display:none;">
			    <a href="#home">Sea Food</a>
		</div>
		<div id="myDropdown" class="drpdwn meatDrp" style="display:none;">
				  <a href="#">Rabbit</a>
				  <a href="#">Beef</a>
				  <a href="#">Pork</a>
				  <a href="#">Chicken</a>
				  <a href="#">Lamb</a>
		</div>
		<div class="__search" id="my-searches" style="display:none">
				<input type="text" name=""><button>Search</button>
		</div>
		
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
						<button class="checkout-button">Checkout</button>
					</div>
					<div class="view-cart-sidebar">
						<button class="view-cart-button">View Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script>
    var url = window.location.origin;
    var cur_url = window.location.href;
	$(document).ready(function(){
  
    $.ajax({
        headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type:'POST',
        url: url+'/homepage',
        data : {data:''}, 
        success:function(data){
            if(data.status == 'online'){
                isLogin();
                loggedIn();
            }
            if(data.status == 'offline'){
                notLogin();
                notIn();
            }
        } 
    });
function notLogin(){
    $('.dropdown-content').empty();
    $('.dropdown-content').append(`
								<a href="{{asset('/u-login')}}">Login</a>
								<a href="{{asset('/u-login')}}">Register</a>
    `);
    $('#ajax_login').click(function(){
        var username = $('#email').val()
        var password = $('#password').val()
        $.ajax({
            headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type:'POST',
            url: url+'/u-login',
            data : {username:username, password:password}, 
            success:function(data){
                if(data.error){
                    $('.dropdown-content').append(`

					<a href="{{asset('/frontpage/myprofile')}}">Account</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                  				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            
                        `);
                }
                if(data.success){
                    // alert(url);
                    if(window.location.href != url+'/'){
                        document.location.reload(false);
                    }else{
                    isLogin(data.email);
                    displayCurrentPage();
                    }
                }
            } 
        });
    })
}



// display_pages

// function displayCurrentPage(){
//     $.ajax({
//         headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
//         type:'GET',
//         url: cur_url,
//         data : {data:''}, 
//         success:function(data){
//             console.log(data)
//         } 
//     });
// }

})
	
	
	
	</script>