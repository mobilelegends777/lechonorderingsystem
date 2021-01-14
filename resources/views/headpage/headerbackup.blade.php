
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
				<span class="des5">Sea Food <img src="{{asset('images/down-arrow.png')}}" class="d-arrow"></span>
				<div class="dropdown-content">
				  <a href="#">Fish</a>
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
				<div class="dropdown-content">
				</div>
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
			<span class="add-to">
			<a href="{{asset('frontpage/cartpage')}}">
				<img src="{{asset('images/cart.png')}}" class="icons3" title="Your Cart">
				</a>
			</span>
		</div>
	</div>
</div>
	<div class="topnav subtop" id="myTopnav">
		<div class="ordinary">
			<a href="{{asset('frontpage/shop')}}">Shop</a>
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
<!-- end mobile toggles -->
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

	

