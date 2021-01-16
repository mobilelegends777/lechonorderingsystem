<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>Checkout</title>
	<link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/global.css')}}" rel="stylesheet">
	<link href="{{asset('css/checkout.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}" />
	<link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Farro&display=swap" rel="stylesheet">
  <script src="{{asset('asset/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  </head>
  @include('layouts.csslinks')
<body>

@include('headpage.header')	
<section id="center" class="clearfix checkout">
 <div class="container">
  <div class="row">
  <div class="checkout_1 clearfix">
   <div class="col-sm-6">
    <div class="check_lm clearfix">
    <div class="check_lm1 clearfix">
	 <ul class="mgt">
	  <li><a href="#">Cart</a> <i class="fa fa-chevron-right"></i></li> 
	  <li>Information <i class="fa fa-chevron-right"></i></li>
	  <li>Shipping <i class="fa fa-chevron-right"></i></li>
	  <li>Payment</li>
	 </ul>
	</div><br>
	<div class="check_lm2 clearfix">
	 <div class="col-sm-6 space_left">
	  <h4>Contact information  <span id="show"class="glyphicon glyphicon-edit"></span></h4>
      <hr>
      <div id="contacts"class="bg-w clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal"><img class="check-icon" src="{{asset('images/n.png')}}">Full Name</h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/e.png')}}">Email</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/p.png')}}">Contact #</h5>
	  </div>
	  <div class="col-sm-6">
	   <h5 class="mgt">{{$value[0]->name}}</h5>
       <h5>{{$value[0]->email}}</h5>
	   <h5>{{$value[0]->phone}}</h5>
	  </div>
	 </div>
     <hr>
	 </div>
   
	 
	 <form metho="POST" action ="{{ route('profileupdated',$value['0']->id) }}" class="form-horizontal" role="form">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    <div id="myDIV">
	<input class="form-control" type="hidden" name="id" value="{{$value['0']->id}}">
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Full Name" type="text" value="{{$value[0]->name}}">

     </div>
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Email" type="text"value="{{$value[0]->email}}">

     </div>
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Contact Number" type="text"value="{{$value[0]->phone}}">

     </div>
     <div class="col-sm-6">
      <h5 class="mgt text-right _sbtn"><a class="button mgt">Save</a></h5>
	 </div>
    </div>
	</div>

	</form>
	

    <h4>Shipping address  <span id="show2"class="glyphicon glyphicon-edit"></h4>
  

	<div id ="MyAdd"class="check_lm4 clearfix">
	 <input class="form-control" placeholder="Address" type="text" value="{{$value[0]->address}}">
	 <input class="form-control" placeholder="House No" type="text"value="{{$value[0]->house_no}}">
     <div class="check_lm4 clearfix">
	 <div class="col-sm-4 space_left">
     <input class="form-control" placeholder="City" type="text"value="{{$value[0]->city}}">
	 </div>
	 <div class="col-sm-4 space_left">
     <input class="form-control" placeholder="Zip Code" type="text"value="{{$value[0]->zip_code}}">
	 </div>
     <div class="col-sm-4 space_all">
     <input class="form-control" placeholder="Land Mark" type="text"value="{{$value[0]->land_mark}}">
	 </div>
     <div class="col-sm-6">
      <h5 class="mgt text-right _sbtn"><a class="button mgt">Save</a></h5>
	 </div>
	
	</div>
	</div>
	
	<div class="check_lm5 clearfix">
	 
	</div>
	<div class="checkout_1l3 clearfix">
	 <hr>
     <div id="adds"class="bg-w clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal"><img class="check-icon" src="{{asset('images/a.png')}}">Full Address</h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/h.png')}}">House No.</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/city.png')}}">City</h5></h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/zp.png')}}">Zip Code</h5></h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/land.png')}}">Land Mark</h5></h5>
	  </div>
	  <div class="col-sm-6">
	    <h5 class="mgt">{{$value[0]->address}}</h5> 
       <h5>{{$value[0]->house_no}}</h5>
	   <h5>{{$value[0]->city}}</h5>
       <h5>{{$value[0]->zip_code}}</h5>
       <h5>{{$value[0]->land_mark}}</h5>
	  </div>
	 </div>
     <hr>
	 <div class="col-sm-6">
     <h5 class="mgt"><a href="{{asset('frontpage/cartpage')}}"><i class="fa fa-chevron-left"></i> Return to cart</a></h5>
	 </div>

	</div>
	</div>
   </div>
   <div class="col-sm-6">
   <div class="check_rm clearfix">
    <div class="checkout_1r clearfix">
	  <div class="checkout_1l2 mgt clearfix">
	 <div class="col-sm-2">
	  <img src="{{asset('asset/img/delisyoso.jpg')}}" alt="abc" class="iw">	 </div>
	 <div class="col-sm-7">
	  <p class="mgt">Lechon Pork</p>
	  <h6></h6>
	 </div>
	 <div class="col-sm-3">
	  <h6 class="text-right">Php 175.00</h6>
	 </div>
	</div>
	</div>
	<div class="checkout_1r clearfix">
	  <div class="checkout_1l2 clearfix">
	 <div class="col-sm-2">
	  <img src="{{asset('asset/img/chickenamor.jpg')}}" alt="abc" class="iw">	 </div>
	 <div class="col-sm-7">
	  <p class="mgt">Chicken na Manok</p>
	  <h6></h6>
	 </div>
	 <div class="col-sm-3">
	  <h6 class="text-right">Php 175.00</h6>
	 </div>
	</div>
	</div>
	<div class="checkout_1r clearfix">
	  <div class="checkout_1l2 clearfix">
	 <div class="col-sm-2">
	  <img src="{{asset('asset/img/pizza.jpg')}}" alt="abc" class="iw">	 </div>
	 <div class="col-sm-7">
	  <p class="mgt">Small Pizza</p>
	  <h6></h6>
	 </div>
	 <div class="col-sm-3">
	  <h6 class="text-right">Php 175.00</h6>
	 </div>
	</div>
	</div>
	<div class="checkout_1r clearfix">
	  <div class="checkout_1l2 clearfix">
	 <div class="col-sm-2">
	  <img src="{{asset('asset/img/pizza.jpg')}}" alt="abc" class="iw">	 </div>
	 <div class="col-sm-7">
	  <p class="mgt">Small Pizza</p>
	  <h6></h6>
	 </div>
	 <div class="col-sm-3">
	  <h6 class="text-right">Php 175.00</h6>
	 </div>
	</div>
	</div>
	<div class="checkout_1r1 clearfix">
    <hr>
	   <h6>Comments</h6>
	   <textarea class="form-control" readonly></textarea>
	 <hr>
    
	 <div class="checkout_1r1i clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal">Subtotal</h5>
	   <h5 class="normal">Shipping</h5>
	  </div>
	  <div class="col-sm-6">
	   <h5 class="mgt">Php 700.00</h5>
	   <h6>Free</h6>
	  </div>
	 </div>
	</div>
	<div class="checkout_1r1 clearfix">
	 <hr>
	 <div class="checkout_1r1i clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal"><strong>Total</strong></h5>
	  </div>
	  <div class="col-sm-6">
	   <h4 class="mgt"><span class="normal">PHP</span></span> 700.00</h4>
	  </div>
      
	 </div>

     <hr>
	 <div class="checkout_1r1i clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal"><strong>Payments</strong</h5>
	  </div>
	  <div class="col-sm-6">
      <input id="myBtn" type="radio" id="payment" name="payment" value="cdc">
      <label for="male">Credt / Debit Card <img  class="debit-icon" src="{{asset('images/adddebit.png')}}"></label><br>
      <input type="radio" id="payment" name="payment" value="cod">
      <label for="male">Cash on Delivery <img  class="debit-icon" src="{{asset('images/cash.png')}}"></label><br>
	  </div>
      
	 </div>
  
	</div>
    
   </div>
   <div class="col-sm-6">
      <h5 class="mgt text-right _center"><a class="button mgt">Place Order</a></h5>
	 </div>
   </div>
  
  </div>
 
  </div>
 </div>	 
</section>
 


@include('headpage.footer')
   @include('layouts.scripts')


 <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2><img class="modal-payment" src="{{asset('images/payment-method.png')}}"></h2>
  </div>
  <div class="modal-body">
  <div class="check_lm4 clearfix">
	 <input class="form-control" placeholder="Account Name" type="text">
	 <input class="form-control" placeholder="Account No. or Card No." type="text">
	 <input class="form-control" placeholder="Amount" type="text" readonly>
     <div class="check_lm4 clearfix">
	 <div class="col-sm-4 space_left">
     <input class="form-control" placeholder="MM" type="text">
	 </div>
	 <div class="col-sm-4 space_all">
     <input class="form-control" placeholder="YY" type="text">
	 </div>
	 <div class="col-sm-4 space_right">
	   <input class="form-control" placeholder="CVC" type="text">
	 </div>
	</div>
  </div>

</div>
<div class="modal-footer">
<h5><img mousetitle="We partner with BPI to ensure that your credit card details are kept safe and secure. 
MJ will not have access to your credit card info."class="info"src="{{asset('images/info.png')}}"></h5>
  <h5 class="mgt text-right modal_btn"><a class="button mgt">Place Order</a></h5>
  </div>

</div>

</div>


</body>
 
</html>


<script>
$(document).ready(function(){
 
    $("#myDIV").hide();
    $("#MyAdd").hide();

 
  $("#show").click(function(){
    $("#myDIV").toggle();
    
    $("#contacts").toggle();
    



  });

  $("#show2").click(function(){
    $("#MyAdd").toggle();
    $("#adds").toggle();
  
    



  });


});
</script>
	
<script>
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>

