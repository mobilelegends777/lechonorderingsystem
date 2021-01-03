<div class="headmenu">
		<span class="des-logo">
            <a href="/">
            <img src="{{asset('images/logo.png')}}" class="logos">
            </a>
		</span>
		<span class="des1">Karne De Lame</span>
		<div class="des2">Fresh Meats</div>
		<span class="sub-menu">
			<a href="{{asset('frontpage/shop')}}">
			<span class="des3">Shop</span>
			</a>
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
			
			<span class="des6">About Us <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
			<span class="des7">Blocks <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
		</span>
		<span class="inputs">
			<input type="text" name="" placeholder="Search products..." class="inpt-search">
			<button class="btn-search">Search</button>
		</span>
		<div class="icons">
			
			<span>
				<img src="{{asset('images/cart.png')}}" class="icons3" title="Your Cart">
			</span>
			<div class="dropdown">
			<span class="account-c ">
				<img src="{{asset('images/user.png')}}" class="icons2">

				<div class="dropdown-content">
					<a href="{{asset('/login')}}">Login</a>
   				 	<a href="{{asset('/register')}}">Register</a>
   
 				</div>
			</span>
			</div>
		</div>
	</div>