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
    
	
   
	 
	 <form metho="POST" action ="{{ route('profupdated',$value['0']->id) }}" class="form-horizontal" role="form">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
    <div id="myDIV">
	<input class="form-control" type="hidden" name="id" value="{{$value['0']->id}}">
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Firstname" name="fname"type="text" value="{{$value[0]->firstname}}">

     </div>
	 <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Middlename" name="mname"type="text" value="{{$value[0]->middlename}}">

     </div>
	 <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Lastname" name="lname"type="text" value="{{$value[0]->lastname}}">

     </div>
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Email" name="email"type="text"value="{{$value[0]->email}}">

     </div>
     <div class="check_lm3 clearfix">
	 <input class="form-control" placeholder="Contact Number" name="phone"type="text"value="{{$value[0]->phone}}">

     </div>
     <div class="col-sm-6">
	  <button class="mgt text-right _sbtn button mgt" type="submit">Save Changes</button>
            
	 </div>
    </div>
	</div>


	</div>
	
	<div class="move-to-top-rem">
    <h4 class="check-title">Shipping address  <span id="show2"class="glyphicon glyphicon-edit"><img src="{{asset('images/edit-icon.png')}}"><h6 class="size-color">Edit</span></h4></h6>
  
	
	<div id ="MyAdd"class="check_lm4 clearfix">
	 <input class="form-control" placeholder="House #" name ="house"type="text" value="{{$value[0]->house_number}}">
	 <input class="form-control" placeholder="Zone" name ="zone"type="text"value="{{$value[0]->purok_zone}}">
     <div class="check_lm4 clearfix">
	 <div class="col-sm-4 space_left">
	 <input class="form-control" placeholder="Street" name="street"type="text"value="{{$value[0]->street}}">
	 <input class="form-control" placeholder="Barangay" name="brngy" type="text"value="{{$value[0]->barangay}}">
	 </div>
	 <div class="col-sm-4 space_left">
	 <input class="form-control" placeholder="City" name="city" type="text"value="{{$value[0]->city}}">
	 <input class="form-control" placeholder="Coordinate" name="coordinate"type="text"value="{{$value[0]->coordinate}}">
	 </div>
     <div class="col-sm-4 space_all">
     <input class="form-control" placeholder="Land Mark" name="land"type="text"value="{{$value[0]->landmark}}">
	 </div>
     <div class="col-sm-6">
	 <button class="mgt text-right _sbtn button mgt" type="submit">Save Changes</button>
	 </div>
	
	</div>
	</div>
	</form>
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
	  <div class="size-height move-to-top-d2">
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
	 
	
	 

	</div>
	</div>
	<div class="col-sm-6 move-top">
     <h5 class="mgt"><a href="{{asset('frontpage/cartpage')}}"><i class="fa fa-chevron-left"></i> Return to cart</a></h5>
	 </div>
   </div >
   <div class="move-flex">
   <div class="check_rm clearfix">
    <div class="checkout_1r clearfix">
	  <div class="checkout_1l2 mgt clearfix">
	 <div class="move-to-center">
		 <h4 class="check-title-size">Order Summary</h4>
	  </div>
	  <div class="onscroll">
		  <table>
		<tr>
			<th class="checkoutv">
		<div class="check-pname">
			Product Name
		</div>
		</th>
			<th class="checkoutv">
		<div class="check-price">
			Price</th>

		</div>	
		</tr>
		<tr>

			<td class="check-data">
		<div class="check-dpname">
			sasas</td>
        </div>
			<td class="check-price">
			<div class="check-dprice">
					12
				</div>
			</td>
		</tr>
		</table>
	</div>
	<div class="checkout_1r1 clearfix">
    <hr>
	   <h6 class="c-size">Comment</h6>
	   <textarea class="form-control txt-size" placeholder="e.g No Mayo " ></textarea>
	 <hr>
    
	 <div class="checkout_1r1i clearfix">
	  <div class="ship col-sm-6">
	   <h5 class="mgt normal">Subtotal</h5>
	   <h5 class="normal ship-bot">Shipping</h5>
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
	   <h5 class="mgt1 normal"><strong>Total</strong></h5>
	  </div>
	  <div class="col-sm-6">
	   <h4 class="mgt2 move-right"><span class="normal ">PHP</span></span> 700.00</h4>
	  </div>
      
	 </div>

     <hr>
	 <div class="checkout_1r1i clearfix">
	  <div class="col-sm-6">
	   <h5 class="mgt normal"><strong>Payments</strong</h5>
	  </div>
	  <div class="col-sm-6 move-free-pay">
      <input id="myBtn" type="radio" id="payment" name="payment" value="cdc">
      <label class="free-move-debit">Credt / Debit Card <img  class="debit-icon" src="{{asset('images/adddebit.png')}}"></label><br>
	  <div class="cod-moves">
      <input type="radio" id="payment" name="payment" value="cod">
      <label class="free-move-debit">Cash on Delivery <img  class="cod-icon" src="{{asset('images/cash.png')}}"></label><br>
	  </div>
	  </div>
      
	 </div>
  
	</div>
    
   </div>
   <div class="col-sm-6">
	  <button class="mgt text-right _center button mgt" type="submit">Place Order</button>
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

@include('sweetalert::alert')
</body>
 
@endsection

