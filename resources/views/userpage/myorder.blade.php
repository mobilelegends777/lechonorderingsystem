@extends('index')
@section('page_content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/myorder.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pastorder.css') }}">
<div class="page-container">
	<div class="page-sub-container">
			<div class="order-stat">
				<a id="active-order">Active Orders</a>
				<a id="past-order">Past Orders</a>
			</div>
	<div id="paset-section">
		<h1>Past Order</h1> 
		<div class="cartpage-item">
			<div class="cartpage-title">
			
				<table >
					<thead class="product-title">
					<tr class="title-carted">
							<td class="td1"></td>
							<td class="td2"></td>
							<td class="td3"></td>
							<td class="td4"></td>
							<td class="td5"></td>
							<td class="td6"></td>
					</tr>
					</thead>
				@if($value[1] == null)
				<tbody class="cart-table-conts">
					<tr class="librebais">
						<td colspan="7">Your Cart is currently empty!!</td>
					</tr>
				</tbody>
				@else
				<tbody class="cart-table-conts">
				<form  method="POST" action="{{ route('cart-update') }}">
					@csrf
				@foreach($value[1] as $item)
					<tr class="librebais" id="cart-cont-item{{$item->cart_id}}">
						<input type="hidden" class="cart-id" name="cartID[]" value="{{$item->cart_id}}">
						<td>
							<span class="cancel-cart" onclick="al.deleteItemCart({{$item->cart_id}})" style="cursor:pointer;">&times;</span>
						</td>
						<td class="carted-items" colspan="2">
						<div class="carted-item-image">
							<a href=""><img src="{{ $item->images }}"></a>
						</div>
						<div class="carted-item-name">
							<a href="">{{ $item->name }}</a>
						</div>
						</td>
						<td class="pst-price">₱ {{ number_format($item->price,2) }}
							<input type="hidden" class="cartPrice cart-price{{ $item->cart_id }}" value="{{ $item->price }}">
						</td>
						<td>
						<button type="button" onclick="addC.addInCart({{$item->product_id}})" class="reorder">Reorder</button>
						</td>
					</tr>
				@endforeach
				</tbody>
				@endif


							

						
				</table>
		
				</form>

			</div>
			
			

				@include('sweetalert::alert')
		</div>
	</div>


		<div id="active-section">


				<h1>Active Order</h1> 

				<div class="active container">

					<div class="chef-anime">

							<img src="{{asset('images/chef.gif')}}" class="avatar img-circle1" >

						

					</div>

				</div>

				<div class="data-container">
						<h5 class ="time">Estimated Time</h5>
						<h1 class="mins-title"> 10-20 Mins</h1>

					<div class="line-loading">

						<img src="{{asset('images/lineloading.gif')}}" class="line">

					</div>
					<div class="data-p">
							<table class="center">

								<!-- <tr class="tablerow">
									<td class="margin-toptr pn"></td>
									<td class="margin-toptr qp"></td>
									<td class="margin-toptr pp"></td>

								</tr> -->
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
								</tr>
								@endforeach
							</table>

					</div>
					<form metho="POST" action ="{{ route('myorderstatus') }}" class="form-horizontal" role="form">
					@csrf
						<div class="order-recieve">
						
						<button type="submit" class="receive">Order Receive</button>
						</div>
					
				</div>

				@include('sweetalert::alert')
		</div>
		</form>	
		</div>
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