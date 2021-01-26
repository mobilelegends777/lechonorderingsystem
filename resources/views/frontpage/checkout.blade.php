@extends('index')
@section('page_content')


	<link href="{{asset('css/global.css')}}" rel="stylesheet">
	<link href="{{asset('css/checkout.css')}}" rel="stylesheet">
	

<body>

	
<section id="center" class="clearfix checkout">
 <div class="container1">
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
	  <h4 class="check-title">Contact information  <span id="show"class="glyphicon glyphicon-edit"><img src="{{asset('images/edit-icon.png')}}"><h6 class="size-color1">Edit</span></h4></h6>
      <hr>
      <div id="contacts"class="bg-w clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal"><img class="check-icon" src="{{asset('images/n.png')}}">Firstname</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/n.png')}}">Middlename</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/n.png')}}">Lastname</h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/e.png')}}">Email</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/p.png')}}">Contact #</h5>
	  
	
	
	  </div>
	  <div class="size-height">

	  <h5 class="mgt"></h5>
	   <h5 class="move-free-data">{{$value['0']->firstname}}</h5>
	   <h5 class="move-free-data">{{$value['0']->middlename}}</h5>
	   <h5 class="move-free-data">{{$value['0']->lastname}}</h5>
	   <h5 class="move-free-data">{{$value['0']->email}}</h5>
	   <h5 class="move-free-data">{{$value['0']->phone}}</h5>
	  </div>
	
	 </div>
    
	 </div>
   
	 
	 <form metho="POST" action ="{{ route('profileupdated',$value['0']->id) }}" class="form-horizontal" role="form">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    <div id="myDIV">
	<input class="form-control" type="hidden" name="id" value="{{$value['0']->id}}">
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Full Name" type="text" value="{{$value[0]->firstname}}">

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
	
	<div class="move-to-top-rem">
    <h4 class="check-title">Shipping address  <span id="show2"class="glyphicon glyphicon-edit"><img src="{{asset('images/edit-icon.png')}}"><h6 class="size-color">Edit</span></h4></h6>
  

	<div id ="MyAdd"class="check_lm4 clearfix">
	 <input class="form-control" placeholder="House #" type="text" value="{{$value[0]->house_number}}">
	 <input class="form-control" placeholder="Zone" type="text"value="{{$value[0]->purok_zone}}">
     <div class="check_lm4 clearfix">
	 <div class="col-sm-4 space_left">
	 <input class="form-control" placeholder="Street" type="text"value="{{$value[0]->street}}">
	 <input class="form-control" placeholder="Barangay" type="text"value="{{$value[0]->barangay}}">
	 </div>
	 <div class="col-sm-4 space_left">
	 <input class="form-control" placeholder="City" type="text"value="{{$value[0]->city}}">
	 <input class="form-control" placeholder="Coordinate" type="text"value="{{$value[0]->coordinate}}">
	 </div>
     <div class="col-sm-4 space_all">
     <input class="form-control" placeholder="Land Mark" type="text"value="{{$value[0]->landmark}}">
	 </div>
     <div class="col-sm-6">
      <h5 class="mgt text-right _sbtn"><a class="button mgt">Save</a></h5>
	 </div>
	
	</div>
	</div>
	
	<div class="check_lm5 clearfix">
	 
	</div >
	<div class="checkout_1l3 clearfix">
	 <hr>
     <div id="adds"class="bg-w clearfix">
	  <div class="col-sm-6 move-to-bot">
	   <h5 class="mgt normal"><img class="check-icon" src="{{asset('images/a.png')}}">House #</h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/h.png')}}">Zone/Prk.</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/city.png')}}">Street</h5>
       <h5 class="normal"><img class="check-icon" src="{{asset('images/zp.png')}}">Barangay</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/land.png')}}">City</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/land.png')}}">Coordinate</h5>
	   <h5 class="normal"><img class="check-icon" src="{{asset('images/land.png')}}">Landmark</h5>
	   
		
	
	   
	  </div>
	  <div class="size-height">
	  <h5 class="move-free-data1">{{$value['0']->house_number}}</h5> 
       <h5 class="move-free-data1">{{$value['0']->purok_zone}}</h5>
	   <h5 class="move-free-data1">{{$value[0]->street}}</h5>
       <h5 class="move-free-data1">{{$value[0]->barangay}}</h5>
	   <h5 class="move-free-data1">{{$value[0]->city}}</h5>
	   <h5 class="move-free-data1">{{$value[0]->coordinate}}</h5>
	   <h5 class="move-free-data1">{{$value[0]->landmark}}</h5>
	  </div>

	 </div>
	 </div>
	 
	 <div class="col-sm-6">
     <h5 class="mgt"><a href="{{asset('frontpage/cartpage')}}"><i class="fa fa-chevron-left"></i> Return to cart</a></h5>
	 </div>
	 

	</div>
	</div>
   </div>
   <div class="move-flex">
   <div class="check_rm clearfix">
    <div class="checkout_1r clearfix">
	  <div class="checkout_1l2 mgt clearfix">
	 <div class="move-to-center">
		 <h4>Order Summary</h4>
	  </div>
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
	   </div>
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
	  </div>
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
	  </div>
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
	   <h6>Comment</h6>
	   <textarea class="form-control txt-size" ></textarea>
	 <hr>
    
	 <div class="checkout_1r1i clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal">Subtotal</h5>
	   <h5 class="normal">Shipping</h5>
	  </div>
	  <div class="col-sm-6">
	   <h5 class="mgt move-right move-to-top move-to-free">Php 700.00</h5>
	   <h5 class="mgt move-right move-to-top margin-top">Free</h5>
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
	   <h4 class="mgt move-right"><span class="normal ">PHP</span></span> 700.00</h4>
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
<h5><img title="We partner with BPI to ensure that your credit card details are kept safe and secure. 
MJ will not have access to your credit card info."class="info"src="{{asset('images/info.png')}}"></h5>
  <h5 class="mgt text-right modal_btn"><a class="button mgt">Place Order</a></h5>
  </div>

</div>

</div>


</body>
 
@endsection

