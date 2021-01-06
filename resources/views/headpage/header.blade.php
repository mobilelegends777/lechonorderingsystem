<div class="headmenu">
	<div class="company-logo">
		<span class="des-logo">
            <a href="/">
            <img src="{{asset('images/logo.png')}}" class="logos">
            </a>
		</span>
		<div class="company-title">
			<span class="des1">MJ Lechon</span>
			<div class="des2">Fresh Lechon</div>
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
			<span class="search-icon">
				<img src="{{asset('images/search-icon.png')}}">
			</span>
			<span class="add-to">
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