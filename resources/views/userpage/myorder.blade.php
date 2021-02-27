@extends('index')
@section('page_content')

<div class="myorder-container">
	<div class="order-sub-conts">
		
	@if($value[2] != null)
	<h1>Active Order</h1> 	
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
								@foreach($value[2] as $item)
								<tr>
									<td class="check-data1">
								<div class="check-dpname1">
									{{ $item->name }}
								</div>
									</td>
								<td class="check-quantz1">
									<div class="check-dquantity1">
									{{ $item->qty }}x
									</div>
									</td>
									<td class="check-price1">
									<div class="check-dprice1">₱
										{{ number_format($item->price,2) }}
									</div>
									</td>
								</tr>
								@endforeach
							</table>
						
					</div>
					<div class="total-fonts"><h5>Total: ₱ {{number_format($value[3][0]->total,2)}} </h5></div>
					<form metho="POST" action ="{{ route('myorderstatus') }}" class="" role="form">
					@csrf
						<div class="order-recieve">
							<button type="submit" class="receive">Order Receive</button>
						</div>
					</form>
		</div>
	@else
		<h1>Past Order</h1> 
		<div class="my-order-cont">
		@foreach($value[1] as $item)
			<div class="my-order-sub">
				<div class="my-order-image">
					<a href=""><img src="{{ $item->images }}"></a>
				</div>
				<div class="my-order-name">
					<span>{{ $item->name }}</span><br>
					<span class="time-history">{{ $item->pickup_datetime }}</span>
				</div>
				<div class="my-order-price">
					<span>₱ {{ number_format($item->price,2) }}</span>
				</div>
				<div class="reorder-btn past-order{{$item->product_id}}">
					<button type="button" onclick="addC.addInCart({{$item->product_id}})" class="reorder">Reorder</button>
				</div>
			</div>
		@endforeach
		</div>
	@endif

	<div class="my-order-cont1">
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
	</div>
	@include('sweetalert::alert')
</div>
<script>
$(document).ready(function(){
	
		$(".my-order-cont1").hide();
		$("#past-order").click(function(){
			$('.active-order-container').hide();
			$(".data-container").hide();
			$(".my-order-cont1").show();
});
		$("#active-order").click(function(){
			$(".my-order-cont1").hide();
				$(".active-order-container").show();
				$(".data-container").show();
				$("#paset-section").hide();
});
	
	
});
</script>
@endsection