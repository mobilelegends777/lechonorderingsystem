@extends('index')
@section('page_content')

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/myorder.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pastorder.css') }}"> -->
<div class="myorder-container">
	<div class="order-sub-conts">
		<h1>Active Order</h1> 
	@if($value[2] != null)	
		<div class="order-stat">
				<span id="active-order">Active Orders</span>
				<span id="past-order">Past Orders</span>
		</div>
		<div class="active-order-container">
			<div class="chef-anime">
				<img src="{{asset('images/chef.gif')}}" class="avatar img-circle1" >
			</div>
		</div>
		<div class="data-container">
						

					<div class="line-loading">
						<div class="prepare-time">
							<h5 class ="time">Estimated Time</h5>
							<h1 class="mins-title"> 10-20 Mins</h1>
						</div>
						<!-- <img src="{{asset('images/lineloading.gif')}}" class="line"> -->

					</div>
					<div class="data-p">
						
							<table class="order-table">
								<tr>
								@foreach($value[2] as $item)
									<td class="check-data1">
								<div class="check-dpname1">
									{{ $item->name }}
								</div>
									</td>
								<td class="check-quantz1">
									<div class="check-dquantity1">
									{{ $item->qty }}
									</div>
									</td>
									<td class="check-price1">
									<div class="check-dprice1">₱
										{{ number_format($item->price,2) }}
									</div>
									</td>
								@endforeach
								</tr>
							</table>
						
					</div>
					<form metho="POST" action ="{{ route('myorderstatus') }}" class="" role="form">
					@csrf
						<div class="order-recieve">
							<button type="submit" class="receive">Order Receive</button>
						</div>
		</div>
	@else
		<div class="my-order-cont">
		@foreach($value[1] as $item)
			<div class="my-order-sub">
				<div class="my-order-image">
					<a href=""><img src="{{ $item->images }}"></a>
				</div>
				<div class="my-order-name">
					<span>{{ $item->name }}</span>
				</div>
				<div class="carted-price">
					<span>₱ {{ number_format($item->price,2) }}</span>
				</div>
				<div class="reorder-btn">
					<button type="button" onclick="addC.addInCart({{$item->product_id}})" class="reorder">Reorder</button>
				</div>
			</div>
		@endforeach
		</div>
	@endif
	</div>
</div>
<script>
$(document).ready(function(){
	
		$("#paset-section").hide();
		$("#past-order").click(function(){
			$("#active-section").hide();
			$("#paset-section").show();
});
		$("#active-order").click(function(){
					$("#active-section").show();
					$("#paset-section").hide();
});
	
	
});
</script>
@endsection