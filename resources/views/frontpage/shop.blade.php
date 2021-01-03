<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
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
				  <li><a href="shop-details.html">Dare, New To Old</a></li>
				
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/8.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/9.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/10.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/4.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/5.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/6.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/11.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/7.jpg')}}" alt="img"></div>
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
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="shop-details.html">
                      <div class="img"><img src="{{asset('asset/img/6.jpg')}}" alt="img"></div>
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
	
		  <h2>Class Aptent</h2>
	 </div>
	  <div class="blog_2_right_top_inner_3 clearfix">
	   <div class="col-sm-4 blog_2_right_top_inner_3_left clearfix">
	    <div class="logic_1 clearfix">
		 <div class="grid clearfix">
					<figure class="effect-jazz">
						<img src="{{asset('asset/img/49.jpg')}}" alt="img25">
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
						<img src="img/50.jpg" alt="img25">
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
						<img src="img/51.jpg" alt="img25">
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
	  <h2>Duis sagittis ipsum</h2>
	  <h6><a href="shop-details.html">Nulla, Dolor ,Odio, Massa ,Ipsum</a></h6>
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

<script type="text/javascript">
	$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
})
	</script>

</body>
      
</html>
