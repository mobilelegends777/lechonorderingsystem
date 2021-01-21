<!-- cart -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>Shop Cart</title>
	<link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/global.css')}}" rel="stylesheet">
	<link href="{{asset('css/cart.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}" />
	<link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Farro&display=swap" rel="stylesheet">
  <script src="{{asset('asset/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  </head>
  @include('layouts.csslinks')
<body>

@include('headpage.header')
	
<section id="center" class="clearfix cart">
 <div class="container">
  <div class="row">
    <div class="cart_1 clearfix">
	 <div class="col-sm-12">
	  <p class="mgt"><a href="#">Home</a> / <a href="#">Shopping Cart</a></p>
	 </div>
	</div>
	<div class="cart_2 clearfix">
	 <div class="col-sm-6">
	  <h3 class="bold col_1">MY CART</h3>
	 </div>
	 <div class="col-sm-6">
      <h5 class="text-right"><a href="#">Continue Shopping</a></h5>
	 </div>
	</div>
	<div class="cart_3 clearfix">
	 <div class="col-sm-8">
	  <div class="cart_3l clearfix">
	   <h5 class="mgt">PRODUCT</h5>
	  </div>
	  <div class="cart_3l1 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="cart_3l1i clearfix">
		 <a href="#"><img src="{{asset('asset/img/chickenamor.jpg')}}" alt="abc" class="iw"></a>		</div>
	   </div>
	   <div class="col-sm-9">
	    <div class="cart_3l1i1 clearfix">
		 <h5 class="mgt"><a href="#">Chicken na Manok</a></h5>
		 <h4>Php 175.00</h4>
		 <h5>Quantity</h5>
		</div>
		<div class="cart_3l1i2 clearfix">
         <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>			</div>
		 <h6 class="mgt"><a class="button_1 mgt" href="#">REMOVE</a></h6>
         <h6 class="mgt"><a class="button mgt" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="cart_3l1 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="cart_3l1i clearfix">
		 <a href="#"><img src="{{asset('asset/img/delisyoso.jpg')}}" alt="abc" class="iw"></a>		</div>
	   </div>
	   <div class="col-sm-9">
	    <div class="cart_3l1i1 clearfix">
		 <h5 class="mgt"><a href="#">Lechon Pork</a></h5>
		
		 <h4>Php 175.00</h4>
		 <h5>Quantity</h5>
		</div>
		<div class="cart_3l1i2 clearfix">
         <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>			</div>
		 <h6 class="mgt"><a class="button_1 mgt" href="#">REMOVE</a></h6>
         <h6 class="mgt"><a class="button mgt" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	  <div class="cart_3l1 border_none clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="cart_3l1i clearfix">
		 <a href="#"><img src="{{asset('asset/img/pizza.jpg')}}" alt="abc" class="iw"></a>		</div>
	   </div>
	   <div class="col-sm-9">
	    <div class="cart_3l1i1 clearfix">
		 <h5 class="mgt"><a href="#">Small Pizza</a></h5>
		 <h4>Php 175.00</h4>
		 <h5>Quantity</h5>
		</div>
		<div class="cart_3l1i2 clearfix">
         <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>			</div>
		 <h6 class="mgt"><a class="button_1 mgt" href="#">REMOVE</a></h6>
         <h6 class="mgt"><a class="button mgt" href="#">UPDATE CART</a></h6>
		</div>
	   </div>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="cart_3r clearfix">
	   <h5 class="mgt head_1">SUBTOTAL</h5>
	   <h3 class="text-center">Php 525.00</h3>
	   <hr>
	   <h6>Additional comments</h6>
	   <textarea class="form-control"></textarea>
	   <h5 class="text-center"><a class="button" href="{{asset('frontpage/checkout')}}">PROCEED TO CHECKOUT</a></h5><br>
	  
	   <hr>
	  </div>

	 </div>
	</div>
  </div>
 </div>	 
</section>
 
@include('headpage.footer')
@include('layouts.scripts')
	


</body>
 
</html>





<!-- shop -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Restaurant System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style_asset.css')}}" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}" />
	 <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline|Yanone+Kaffeesatz" rel="stylesheet">

    <script src="{{asset('asset/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('asset/js/jquery.aniview.js')}}"></script>
  
    @include('layouts.csslinks')
	<script>
        $(document).ready(function(){
            $('.aniview').AniView();
        });
    </script>
	
	
  </head>
  
  
  
  
<body>

@include('headpage.header')

<section id="shop" class="clearfix">
 <div class="shop_main">
  <div class="container">
  <div class="row">
   <div class="shop clearfix">
   <h2>Shop With MJ Lechon</h2>
   </div>
  </div>
 </div>
 </div>
</section>

<section id="shop_2" class="clearfix">
    <div class="container">
  <div class="row">
   <div class="shop_2 clearfix">
   <div class="col-sm-9 shop_2_left clearfix">
    <div class="shop_2_left_top clearfix">
	 <div class="shop_2_left_top_inner_1 clearfix">
	  <div class="col-sm-8 shop_2_left_top_inner_1_left clearfix">
	   <div class="shower_left clearfix">
	    <h4>Showing 1–9 of 15 results</h4>
	   </div>
	  </div>
	  <div class="col-sm-4 shop_2_left_top_inner_1_right clearfix">
	   <div class="shower_right clearfix">
	    <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Sort By</h3>
					<span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
				</div>
				<div class="shower_right_inner clearfix">
				 <div class="panel-body" style="display: none;">
				 <ul>
				  <li><a href="shop-details.html">Price, Low To High</a></li>
				  <li><a href="shop-details.html">Price, High To Low </a></li>
				  <li><a href="shop-details.html">Alphabetically, A-Z </a></li>
				  <li><a href="shop-details.html">Alphabetically, Z-A</a></li>
				  <li><a href="shop-details.html">Date, New To Old</a></li>
				
				 </ul>
				 </div>
				</div>
			</div>
	   </div>
	  </div>
	 </div>
<div class="shop_2_left_top_inner_2 clearfix">
	<div class="center_1_middle clearfix">

		<div class="col-sm-4 center_1_middle_left_1 clearfix">

			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/New/slicebread.jpg')}}" alt="img"></div>
					<div class="info">
						<h3>add to cart</h3>
					</div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">Slice Bread</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 72.00</h6>
			</div>

		</div>

		<div class="col-sm-4 center_1_middle_left_1 clearfix">

			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/New/Breastbbq.jpg')}}" alt="img"></div>
				  <div class="info">
				    <h3>add to cart</h3>
				  </div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">Breast Chicken BBQ</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 97.00</h6>
			</div>

		</div>

		<div class="col-sm-4 center_1_middle_left_1 clearfix">

			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/New/Porkbbq.jpg')}}" alt="img"></div>
				  <div class="info">
				    <h3>add to cart</h3>
				  </div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">Pork BBQ</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 23.00</h6>
			</div>

		</div>

	</div>
	<div class="center_1_middle clearfix">

		<div class="col-sm-4 center_1_middle_left_1 clearfix">

			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/Combo/A1.jpg')}}" alt="img"></div>
					<div class="info">
						<h3>add to cart</h3>
					</div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">A1. 2Pcs Pork BBQ & Rice</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 77.00</h6>
			</div>

		</div>

		<div class="col-sm-4 center_1_middle_left_1 clearfix">

			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/Combo/A2.jpg')}}" alt="img"></div>
					<div class="info">
						<h3>add to cart</h3>
					</div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">A2. Chicken BBQ Paa & Rice</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 116.00</h6>
			</div>

		</div>

		<div class="col-sm-4 center_1_middle_left_1 clearfix">

			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
					<div class="img"><img src="{{asset('asset/Combo/A3.jpg')}}" alt="img"></div>
						<div class="info">
							<h3>add to cart</h3>
						</div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">A3. Chicken BBQ Breast & Rice</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 129.00</h6>
			</div>

		</div>

	</div>
	<div class="center_1_middle clearfix">

		<div class="col-sm-4 center_1_middle_left_1 clearfix">
			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/Appetizers/small.jpg')}}" alt="img"></div>
					  <div class="info">
					    <h3>add to cart</h3>
					  </div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">Atsara Small</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 33.00</h6>
			</div>
		</div>

		<div class="col-sm-4 center_1_middle_left_1 clearfix">
			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/Appetizers/big.jpg')}}" alt="img"></div>
					  <div class="info">
					    <h3>add to cart</h3>
					  </div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">Atsara Big</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 85.00</h6>
			</div>
		</div>

		<div class="col-sm-4 center_1_middle_left_1 clearfix">
			<div class="center_1_middle_left_1_inner">
				<div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
				  <div class="img"><img src="{{asset('asset/Appetizers/palapa.jpg')}}" alt="img"></div>
					  <div class="info">
					    <h3>add to cart</h3>
					  </div></a>
				</div>
			</div>
			<div class="center_1_middle_left_2_inner">
				<h3><a href="{{asset('frontpage/shop-details')}}">Palapa</a></h3>
				<h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
				<h6>Php 33.00</h6>
			</div>
		</div>

	</div>
</div>
			<div class="shop_2_left_top_inner_3 clearfix">
				<div class="blog_2_left_main_inner_4 clearfix">
					<ul>
						<li class="active_3"><a href="#">1</a></li>
						<li><a href="shop-details.html">2</a></li>
						<li class="last_tab"><a href="shop-details.html"><i class="fa fa-chevron-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
   </div>
   <div class="col-sm-3 shop_2_right clearfix">
    <div class="shop_2_right_top clearfix">
	 <div class="shop_2_right_top_inner_1 clearfix">
	  <h3>Filter by price</h3>
	 </div>
	 <div class="shop_2_right_top_inner_2 clearfix">
	  <ul>
	   <li><p>Price: Php8 — Php32</p></li>
	   <li><a href="shop-details.html">filter</a></li>
	  </ul>
	 </div>
	 <div class="shop_2_right_top_inner_3 clearfix">
	  <div class="blog_2_right_top_inner_2 clearfix">
	  <h2>Categories</h2>
	  <h5><a href="{{asset('frontpage/shop')}}">All (100)</a></h5>
	  <h5><a href="{{asset('frontpage/appetizer')}}">Appetizers (6)</a></h5>
	  <h5><a href="{{asset('frontpage/newproduct')}}">New Products (5)</a></h5>
	  <h5><a href="{{asset('frontpage/combomeal')}}">Combo Meals (4)</a></h5>
	  <h5><a href="{{asset('frontpage/dessert')}}"> Desserts (3)</a></h5>
	   <h5><a href="{{asset('frontpage/drinks')}}">Drinks (4)</a></h5>
	
	<h2>Promo Meals</h2>
	 </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
			<figure class="effect-jazz">
				<img src="{{asset('asset/img/image11.jpg')}}" alt="img25">
				<figcaption>
					<a href="shop-details.html">View more</a>
				</figcaption>			
			</figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="shop-details.html">Semper Porta</a></h2>
		  <h5><a href="shop-details.html">April 20, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
			<figure class="effect-jazz">
				<img src="{{asset('asset/img/porksteak.jpg')}}" alt="img25">
				<figcaption>
					<a href="shop-details.html">View more</a>						
				</figcaption>			
			</figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="shop-details.html">Fusce nec tellus</a></h2>
		  <h5><a href="shop-details.html">April 17, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
				<figure class="effect-jazz">
					<img src="{{asset('asset/img/delisyoso.jpg')}}" alt="img25">
					<figcaption>
						<a href="shop-details.html">View more</a>						
					</figcaption>			
				</figure>
					
	  </div>
		</div>
	   </div>
	    <div class="col-sm-8 blog_2_right_top_inner_3_right clearfix">
		 <div class="logic_2 clearfix">
		  <h2><a href="shop-details.html">Jump For Juice</a></h2>
		  <h5><a href="shop-details.html">April 17, 2018</a></h5>
		 </div>
		</div>
	  </div>
	  <div class="blog_2_right_top_inner_2 clearfix">

	 </div>
	 </div>
	</div>
   </div>
   </div>
  </div>
 </div>
</section>



@include('headpage.footer')



</body>
      
</html>

@include('layouts.scripts')
