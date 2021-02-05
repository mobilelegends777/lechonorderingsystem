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
					<tr class="librebais">
						<td>Your Cart is currently empty!!</td>
					</tr>
				</tbody>
				@else
				<tbody class="cart-table-conts">
			<form  method="POST" action="{{ route('cart-update') }}">
				@csrf
				@foreach($value[1] as $item)
					<tr class="librebais" id="cart-cont-item{{$item->cart_id}}">
						<input type="hidden" name="cartID" value="{{$item->cart_id}}">
						<td>
							<span class="cancel-cart" onclick="al.deleteItemCart({{$item->cart_id}})" style="cursor:pointer;">&times;</span>
						</td>
						<td class="carted-items">
						<div class="carted-item-image">
							<a href=""><img src="{{ $item->images }}"></a>
						</div>
						<div class="carted-item-name">
							<a href="">{{ $item->name }}</a></td>
						</div>
						<td>{{ $item->price }}
							<input type="hidden" class="cart-price{{ $item->cart_id }}" value="{{ $item->price }}">
						</td>
						<td>
							<div  class="cart-input">
								<button  type="button" onclick="dec('qty',{{$item->cart_id}})">-</button>
									<input class="cartQty__{{$item->cart_id}}" type="number" value="{{$item->quantity}}" name="qty">
								<button type="button" onclick="inc('qty',{{$item->cart_id}})">+</button>
							</div>
						</td>
						<td>
							<input type="hidden" class="sub-subtotal{{ $item->price }}">
							<span class="subtotal{{ $item->cart_id }}">{{ $item->price }}</span>
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
							<span>20,000</span>
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
										<span class="rate__">Flat rate: <b style="color: #c4a256;">29.00</b></span>
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
						<span style="color: #c4a256;">20,029</span>
					</div>
				</div>	
				<div class="proceed__">	
					<div>	<a href="{{asset('frontpage/checkout')}}">
							<button class="__proceed-to">Proceed to Checkout</button>
							</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection