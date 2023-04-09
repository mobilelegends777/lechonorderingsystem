@extends('index')
@section('page_content')
@include('layouts.csslinks')
<link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">
<section class="flex">
	<div class= "del-details">
		<div class="2-head">
			<h3 class="num-font"><span>1</span></h3>
			<h3 class= "d-title">Delivery Details</h3>

		</div>

			
		<div class="Del-time">
			<div class="st-con">
			<h5 class ="d-time"> Special Delivery time:</h5>

			<div id=special-time>

				<label class="switch">
				<input type="checkbox" id="myFunctionss" >
				<span class="slider round"></span>
				</label>
			</div>
			</div>
		<div class="for-flex-time">
			<div class="custom-select">
			<input class="select-date"type="date" id="myCheck" disabled name="select-date"data-date-start-date="d" value = "{{date('Y-m-d', strtotime('+1 day'))}}">
			</div>
			<div class="custom-select">
			<input class="select-time"type="time" id="myCheck2" disabled name="select-time" value = "12:00:00">
			</div>
		</div>
			
		</div>

		<div class="del-add">
		
		<h5 class ="d-time"> Delivery address</h5>

			<div role="button" class="del-info">

			<div class="d-info-details">
				<div class="check-top">
						<div class="address-line">{{$value[0]->house_number}} {{$value[0]->purok_zone}}</div>
						<div class="address-line">{{$value[0]->barangay}} {{$value[0]->city}}</div>
						<div class="address-line">{{$value[0]->house_number}} {{$value[0]->purok_zone}} {{$value[0]->street}} {{$value[0]->barangay}} {{$value[0]->city}} {{$value[0]->landmark}}</div>
			
				</div>	
			</div>
			
			
			</div>
		
		</div>


	</div>
	
	<div class="summary">
		<div class="2-head">
				<h3 class= "o-title">Your order from MJ Lechon- Iligan City</h3>

		</div>
			<div class="onscroll pname">
				<table>
				
				<tr>
					<th class="checkoutv">
				<div class="check-pname">
				
				</div>
				</th>
				<th class="checkoutv">
				<div class="check-dquantity">
				
				</th>
					<th class="checkoutv">
				<div class="check-price">
				
				</th>

				</div>	
				</tr>

				
				<div class="data-row">
				<tr>
				
				@foreach($value1[1] as $item)
				<td class="check-quantz">
					<div class="check-dquantity">
					<strong>{{ $item->quantity }}</strong> x
					</div>
				</td>
			
				<td class="check-data" >
				<div class="check-dpname">
				{{ $item->name }}
				</div>
				</td>
		
					<td class="check-price check-data">
					<div class="check-dprice">PHP
					{{ number_format($item->price,2) }}
					</div>
					</td>
				
				</tr>
				@endforeach
			</div>
			
		</table>
		<hr class="line">
		<div class="sub-total1">
			<span>Subtotal</span>
			<span class="total-spacing">PHP {{ number_format($value1[2][0]->total,2) }}</span>

		</div>
		<div class="sub-total1">
			<spa>Delivery fee</span>
			<span class="total-spacing1">PHP 0.00</span>

		</div>
		<div class="sub-total1">
			
			<span class="total">Total</span><i class="vat-title">(Incl. VAT)</i>
			<span class="total-spacing2 total">PHP {{ number_format($value1[2][0]->total,2) }}</span>
		</div>
	</div>
	

	</div>

</section>




<section>

	<div class="p-details">
		<div class="2-head">
			<h3 class="num-font"><span>2</span></h3>
			<h3 class= "d-title">Personal Details</h3>

		</div>

		<div class="per-info">
			<div class="inform-details">
				<div class=personal-line1>{{$value[0]->firstname }} {{$value[0]->middlename}} {{ $value[0]->lastname}}</div>
				<div class=personal-line>{{$value[0]->email}}</div>
				<div class=personal-line>+63{{$value[0]->phone}}</div>
				<div class=personal-line>{{$value[0]->tel}}</div>
			</div>


	</div>

	</div>

	

</section>

<section>
	<div class="payment-details">

		<div class="2-head">
				<h3 class="num-font"><span>3</span></h3>
				<h3 class= "d-title">Payment</h3>

		</div>
		<form metho="POST" action ="{{ route('order') }}" class="form-horizontal" role="form">
    {{ csrf_field() }}
        {{ method_field('PATCH') }}
			<input type="hidden" name="_total" value="{{ $value1[2][0]->total }}">
		<div class="credit">
			<div class="cc-details">
				<label	id="cdc-hide"class="pay-wrapper">
					<div class="pay-image"> <img class="pay-img" src="{{asset('images/payment-method.png')}}"> </div>

					<div class="pay-button">

					<input class="py-btn"type = "radio" name="payment-method" value="cdc">
					<i class="c-title">Credit / Debit Card</i>
					</div>

				</label>

			
				<div id="cdc-show">

						<input class="form-control" placeholder="Name on Card" type="text">
						<input class="form-control" placeholder="Account No. or Card No." type="text">
						<div class="for-flex-form">
							<input class="form-control" placeholder="MM/YY" type="text" >
							<input class="form-control" placeholder="CVC" type="text" >
						</div>

				</div>

			</div>

		</div>

		<div class="cash">
			<div class="cc-details">
				<label	id="cod"class="pay-wrapper">
					<div class="pay-image"> <img class="pay-img1" src="{{asset('images/cod.svg')}}"> </div>

					<div class="pay-button">

					<input class="py-btn" type = "radio" name="payment-method" value='cod'checked="checked">
					<i class="c-title">Cash on Delivery</i>
					</div>

				</label>

			</div>

		

		</div>
		<div class= "title-place-order">

			<button type = "button" id="myBtn" class="place-btn"> Place Order</button>


		</div>

		<div class="terms">I agree that placing the order places me under an obligation to make a payment in accordance with the General Terms and Conditions.</div>
	</div>

</section>

<section class="Modal">
<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p class="qstn">Are You Sure You Want To Proceed ?</p>
	<div class="btn-yn-con">
	<div class="btn-yesno">	
	<button type = "submit" class="Yes1"> Yes</button>
	<button type = "button"  class="close1">No</button>
	</div>
	</div>
  </div>

</div>
	</form>
</section>


@include('sweetalert::alert')
<script>

$(document).ready(function(){
 
 $("#cdc-show").hide();



$("#cdc-hide").click(function(){
$("#cdc-show").show();
$("#cod").show();
 
 
 
 



});


$("#cod").click(function(){
$("#cdc-show").hide();

 
 
 
 



});



});


</script>
<script>
    $(document).ready(function(){
        $("input[type='radio']").click(function(){
            var radioValue = $("input[name='payment-method']:checked").val();
			//alert(radioValue);
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

var span2 = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

span2.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>
<script>
$('#myFunctionss').click(function(){
 
	$("#myCheck").attr('disabled', !$("#myCheck").attr('disabled'));
	$("#myCheck2").attr('disabled', !$("#myCheck2").attr('disabled'));

});



</script>
@endsection




