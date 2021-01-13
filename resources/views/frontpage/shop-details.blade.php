@extends('index')
@section('page_content')
	<link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style_asset.css')}}" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}" />
	 <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline|Yanone+Kaffeesatz" rel="stylesheet">

    <script src="{{asset('asset/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('asset/js/jquery.aniview.js')}}"></script>
	<script>

        $(document).ready(function(){
            $('.aniview').AniView();
        });
    </script>
	
  
<section id="shop" class="clearfix shop_details">
 <div class="shop_main">
  <div class="container">
  <div class="row">
   <div class="shop clearfix">
   <h2>Shop - Details</h2>
   </div>
  </div>
 </div>
 </div>
</section>

<section id="shopping" class="clearfix">
    <div class="container">
  <div class="row">
   <div class="shopping clearfix">
   <div class="col-sm-6 shopping_left clearfix">
    <div class="shopping_left_inner_1 clearfix">
	 <div class="offer_home_inner text-center">
	   <a href="details.html"><img class="" src="{{asset('asset/New/slicebread.jpg')}}" width="100%" height="400px"></a>
	  </div>
	</div>
	<div class="shopping_left_inner_2 clearfix">
	<ul>
	 <li><a href="#"><img src="{{asset('asset/img/chicken1.jpg')}}"></a></li>
	 <li><a href="#"><img src="{{asset('asset/img/chicken2.jpg')}}"></a></li>
	 <li><a href="#"><img src="{{asset('asset/img/chicken3.jpg')}}"></a></li>
	</ul>
	</div>
   </div>
   <div class="col-sm-6 shopping_right clearfix">
    <div class="shopping_right_top clearfix">
	 <div class="shop_right_inner_1 clearfix">
	   <h4>Slice Bread</h4>
	   <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <a href="#">(1 customer review)</a></h5>
	   <h3><span class="dollar_tab">Php 74.00</span> Php 73.00</h3>
	   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris nec tellus sed augue semper porta.</h6>
	   <h6>SKU: 002</h6>
	   <h6>CATEGORY:<a href="#"> Meat</a></h6>
	   <h6>Tag:<a href="#"> Chicken</a></h6>
	  </div>
	 <div class="shop_right_inner_2 clearfix">
	    <div class="col-sm-3 details_2_right_inner_2_left clearfix">
		 <div class="details_2_right_inner_2_left_inner">
		 <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>			</div>
		 </div>
		</div>
		<div class="col-sm-2 details_2_right_inner_2_middle clearfix">
		 <div class="shopper_1">
		  <p><a href="#"><i class="fa fa-shopping-cart"></i></a></p>
		 </div>
		</div>
		<div class="col-sm-5 details_2_right_inner_2_right clearfix">
		 <div class="shopper_2">
		  <p><a href="{{asset('frontpage/cartpage')}}">Vew Your Cart</a></p>
		 </div>
		</div>
	  </div>
     <div class="shop_right_inner_3 clearfix">
	   <div class="ziehharmonika">
			<h3 data-prefix="★">Description</h3>
			<div class="arrowDown"></div>
			<div class="collapseIcon">+</div>
			<div>
				<p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C.</p>
			</div>
			<h3 data-prefix="★">Variation (1 Required)</h3>
			<div>
			<input type="Radio" id="Kiddie" name="Kiddie" value="">
			<label for="Kiddie">Kiddie</label><br>			
			<input type="Radio" id="Small" name="Small" value="">
			<label for="Small">Small</label><br>
			<input type="Radio" id="Medium" name="Medium" value="">
			<label for="Medium">Medium</label><br>
			<input type="Radio" id="Large" name="Large" value="">
			<label for="Large">Large</label><br>
			</div>
			<h3 data-prefix="★">Special Instructions</h3>
			<div>
				<div class="ziehharmonika_bottom clearfix">
				 <div class="col-sm-2 article_2_left clearfix">
	   
	  
				</div>
				<div class="ziehharmonika_last clearfix">
				 <h5><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h5>
				 <h6>Please Let us know if you are allergic to anything or if we need to avoid anything</h6>
				</div>
				<div class="details_2_inner_8 clearfix">
	   <textarea placeholder="e.g No mayo..." class="form-control form_1"></textarea>
	  </div>
			</div>
		</div>
	  </div>
	</div>
   </div>
   </div>
  </div>
 </div>
</section>

<section id="relation" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="relation clearfix">
    <h2>Related Products</h2>
   </div>
   <div class="center_1_middle clearfix">
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
                      <div class="img"><img src="{{asset('asset/New/breastbbq.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="#">Chicken Breast BBQ</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 97.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
                      <div class="img"><img src="{{asset('asset/New/Paabbq.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="#">Paa Chicken BBQ</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 85.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
                      <div class="img"><img src="{{asset('asset/New/Lechonmanok.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="#">Lechon Manok</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 254.00</h6>
	 </div>
	 </div>
	 <div class="col-sm-3 center_1_middle_left_1 clearfix">
	  <div class="center_1_middle_left_1_inner">
	   <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
                      <div class="img"><img src="{{asset('asset/New/Liempo.jpg')}}" alt="img"></div>
                      <div class="info">
                        <h3>add to cart</h3>
                      </div></a></div>
	  </div>
	  <div class="center_1_middle_left_2_inner">
	  <h3><a href="#">Liempo</a></h3>
	  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
	  <h6>Php 254.00</h6>
	 </div>
	 </div>
	</div>
  </div>
 </div>
</section>

 


<script src="{{asset('asset/js/ziehharmonika.js')}}"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: '★'
		});
	});
</script>
@endsection