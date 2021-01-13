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
	   <h5 class="text-center"><a class="button" href="checkout.html">PROCEED TO CHECKOUT</a></h5><br>
	  
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
