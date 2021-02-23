@extends('index')
@section('page_content')

<section class="flex">
	<div class= "del-details">
		<div class="2-head">
			<h3 class="num-font">1</h3>
			<h3 class= "d-title">Delivery Details</h3>

		</div>

			
		<div class="Del-time">
		
			<h5 class ="d-time"> Delivery time:</h5>
		
		<div class="for-flex">
			<div class="custom-select">
				<select class="select-date">
					<option value="0">Tue, Feb 23</option>
					<option value="1">Wed, Feb 24</option>
					<option value="2">Thur, Feb 25</option>
					
				</select>
			</div>
			<div class="custom-select">
				<select class="select-time">
					<option value="0">6:00 AM</option>
					<option value="1">6:15 AM</option>
					<option value="2">6:30 AM</option>
					
				</select>
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
			<h3 class="num-font">2</h3>
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
				<h3 class="num-font">3</h3>
				<h3 class= "d-title">Payment</h3>

		</div>
		<form metho="POST" action ="{{ route('order') }}" class="form-horizontal" role="form">
    {{ csrf_field() }}
        {{ method_field('PATCH') }}
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

			<button type = "submit" class="place-btn"> Place Order</button>


		</div>

		<div class="terms">I agree that placing the order places me under an obligation to make a payment in accordance with the General Terms and Conditions.</div>
	</div>
</form>
</section>

<section class="order-sum">

	
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
@endsection




