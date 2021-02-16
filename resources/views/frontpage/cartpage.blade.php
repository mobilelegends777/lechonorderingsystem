@extends('index')
@section('page_content')
<div class="page-container">
	<div class="page-sub-container">
		<h1>Cart</h1>
		<div class="cartpage-item">
			<div class="cartpage-title">
			
				<table class="product-on-cart">
					<thead class="product-title">
					<tr class="title-carted">
							<td class="td1"></td>
							<td class="td2"></td>
							<td class="td3"></td>
							<td>Product</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Subtotal</td>
					</tr>
					</thead>
				@if($value[1] == null)
				<tbody class="cart-table-conts">
					<tr class="cart-empty-msg">
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
						<td>₱ {{ number_format($item->price,2) }}
							<input type="hidden" name="cartNo_" class="cartNo_ cart-price{{ $item->cart_id }}" value="{{ $item->cart_id }}">
						</td>
						<td>
							<div  class="cart-input">
								<button  type="button" class="qty-dec" onclick="dec('qty',{{$item->cart_id}})">-</button>
									<input class="cartQ cartQty__{{$item->cart_id}}" type="number" value="{{$item->quantity}}" name="qty[]">
								<button type="button" class="qty-inc" onclick="inc('qty',{{$item->cart_id}})">+</button>
							</div>
						</td>
						<td>
							<input type="hidden" class="sub-subtotal{{ $item->price }}">
							<span class="sub-totals subtotal{{ $item->cart_id }}">{{$item->total}}</span>
						</td>
					</tr>
				@endforeach
				</tbody>
				@endif
						
				</table>
				<div class="coupon-submit">	
						<div class="apply-coupon">
							<input type="text" name="" placeholder="Coupon code">
							<button>Apply coupon</button>
						</div>
						<div class="update-cart">	
							<button type="submit">Update cart</button>
						</div>
				</div>	
				</form>
			</div>
			<div class="summary-conts">	
				<div class="summary-sub-cont">
					<div>	
							<span>Subtotal</span>
					</div>
					<div class="sub-total">	
							<span class="cart-page-subtotal"></span>
					</div>
				</div>
				<hr>
				<div class="shipping_">	
						<div>	
								<span>Shipping</span>	
						</div>
						<div class="address__">	
							<div class="shipping-info">
								<div>	
										<span class="rate__">Flat rate: <b style="color: #c4a256;" class="flat-rate">29</b></span>
								<div>	
										<span>Shipping to <b>Phillipines.</b></span>
								</div>
							</div>
							<div class="edit-address">	
									<a href="#">Change address</a>
							</div>
						</div>
						</div>	
				</div>
				<hr>
				<div class="summary-total">	
					<div>	
						<span>Total</span>
					</div>
					<div class="__total">	
						<span class="Totals" style="color: #c4a256;"></span>
					</div>
				</div>	
				<div class="proceed__">	
					<div>	
						<!-- <a href="{{asset('frontpage/checkout')}}"> -->
								<button class="__proceed-to" onclick="Chck.checkoutCart()">Proceed to Checkout</button>
						<!-- </a> -->
					</div>
				</div>

				@include('sweetalert::alert')
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	subTot();
	addedTotal();
	function addedTotal(){
		var total = 0;
		flat = Number($('.flat-rate').text());
		subT = Number($('.cart-page-subtotal').text());
		total = flat + subT;
		$('.Totals').text(total.toFixed(2));
	}
	// $('.cancel-cart').each(function(){
	// 	$(this).on('click', function(){
	// 		subTot();
	// 		addedTotal();
	// 	});
	// });
	$('.qty-inc').on('click',function(){
		subTot();
		addedTotal();
	});
	$('.qty-dec').on('click',function(){
		subTot();
		addedTotal();
	});
	function subTot(){
		var sums = 0;
	$('.sub-totals').each(function(){
		sums += Number($(this).text());
	});
	$('.cart-page-subtotal').text(sums.toFixed(2));
	}
	
});
</script>
@endsection