<div class="headmenu">
	<div class="company-logo">
		<span class="des-logo">
            <a href="/">
            <img src="{{asset('images/logo.png')}}" class="logos">
            </a>
		</span>
		<div class="company-title">
			<span class="des1">Karne De Lame</span>
			<div class="des2">Fresh Meats</div>
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
				  <a href="#">Rabbit</a>
				  <a href="#">Beef</a>
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
			<span>&#9776;Menu</span>
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
	<div class="topnav" id="myTopnav">
		    <a href=""><div class="ordinary">Shop</div></a>
		    <a href=""><div class="ordinary">Fish </div></a>
		    <a href=""><div class="ordinary">Meat </div></a>
		    <a href=""> <div class="ordinary">About Us </div></a>
		    <a href=""><div class="ordinary">Blocks </div></a>
	</div>

<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    }else{
        x.className = "topnav";
    }
} 
</script>