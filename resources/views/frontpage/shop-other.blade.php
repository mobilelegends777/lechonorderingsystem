<!DOCTYPE html>
<html>
<head>
	<title>Restaurant System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	@include('layouts.csslinks')

</head>
<body>
@include('headpage.header')
	<div class="container">
		<div class="shop-container">
			<div class="shop-sub-container">
				<div class="shop-img">
					<img src="{{ asset('asset/img/59.jpg') }}">
				</div>
				<span class="shop-company">
					<h2>Shop With MJ Lechon</h2>
				</span>
			</div>
			<div class="shop-sub-conts">
				<div class="shop-sub-container2">
					<div class="shop-filters">
						<span><h3>Categories</h3></span>
						<div class="filter-cat">
							<span>Seafood</span>
							<ul>
								<li>Daing na Bangus</li>
								<li>Shrimp Sinigang</li>
							</ul>
							<span>Meat</span>
							<ul>
								<li>Lechon Baboy</li>
								<li>Lechon Manok</li>
								<li>Liempo</li>
								<li>Pork BBQ</li>
								<li>Liver BBQ</li>
							</ul>
						</div>
					</div>
					<!-- <div class="price-filter">
						<span><h3>Filter by price</h3></span>
						<div id="price-slider">
							
						</div>

					</div>	 -->
					<div class="rating-filter">
						<span><h3>Average rating</h3></span>
						<div class="star-ratings">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<span>(5)</span>
							</a>
						</div>
						<div class="star-ratings">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<span>(1)</span>
							</a>
						</div>	
					</div>
					<div class="some-shop-info">
						<span><h3>Some Shop Info</h3></span>
						<div class="shop-info-p">
							Carni Rosso is an online reliable greengrocery and a fruit store for all to find multiple fresh products which strengthen health and add new interesting and rich tastes to your dinner table. We are happy to serve you!
						</div>
					</div>			
				</div>
				<div class="shop-sub-container3">
					<div class="shop-sorting">
						<div class="sort-row-column">
							<a href="">
								<i class="fas fa-th" aria-hidden="true"></i>
							</a>
							<a href="">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</a>
						</div>
						<div class="number-show">
							<span>Showing 1–16 of 20 results</span>
						</div>
						<div class="sort-items">
							<select>
								<option>Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by price: Low to High</option>
								<option>Sort by price: High to Low</option>
							</select>
						</div>
					</div>
					<div class="shop-items-conts">
						<div class="shop-items">
							<img src="{{ asset('images/liempo.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Lechonbaboy.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Lechonmanok.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Liverbbq.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Porkbbq.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Sinigangshrimp.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Breastbbq.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Lechon rice.jpg') }}">
						</div>
						<div class="shop-items">
							<img src="{{ asset('images/Paabbq.jpg') }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('headpage.footer')
</body>
</html>
@include('layouts.scripts')







<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Restaurant System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
	    <h4>Showing 1–9 of 15 resultss</h4>
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
                      <div class="img"><img src="{{asset('asset/img/beefsteak1.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Lechon De Leche</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 15.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/bread.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Lechon Kanding</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 14.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/chickenamor.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Lechon Small</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 28.00</h6>
	 </div>
	 </div>
	</div>
	  <div class="center_1_middle clearfix">
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/delisyoso.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">lechon Y Lame</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 18.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/pizza.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Lechon Big</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 12.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/porksteak.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Pork BBQ</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 25.00</h6>
	 </div>
	 </div>
	 
	</div>
	  <div class="center_1_middle clearfix">
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/chickenamor.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Super Pork</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 32.00</h6>
	 </div>
	 </div>
     <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/delisyoso.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Pork na Pork</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 32.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-4 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="{{asset('frontpage/shop-details')}}">
                      <div class="img"><img src="{{asset('asset/img/porksteak.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="shop-details.html">Pork N Beans</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 10.00</h6>
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
	  <h5><a href="#">Breakfast (6)</a></h5>
	  <h5><a href="#">Lunch (5)</a></h5>
	  <h5><a href="#">Combo Meal (4)</a></h5>
	  <h5><a href="#"> Beverages (3)</a></h5>
	   <h5><a href="#">Snacks (4)</a></h5>
	    <h5><a href="#">Dinner(6)</a></h5>
	
		  <h2>Promo Meals</h2>
	 </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="{{asset('asset/img/image11.jpg')}}" alt="img25">
						<figcaption>
							<a href="shop-details.html">View more</a>						</figcaption>			
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
							<a href="shop-details.html">View more</a>						</figcaption>			
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
							<a href="shop-details.html">View more</a>						</figcaption>			
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
	  <h2>Share</h2>
	  <ul>
	   <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
	   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	  </ul>
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
