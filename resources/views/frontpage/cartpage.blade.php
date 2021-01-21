@extends('index')
@section('page_content')
<div class="page-container">
	<div class="page-sub-container">
		<h1>Cart</h1>
		<div class="cartpage-item">
			<div class="cartpage-title">
			<form>
				@csrf
				<table class="product-on-cart">
					<thead class="product-title">
					<tr>
							<td></td>
							<td></td>
							<td>Product</td>
							<td>Price</td>
							<td>Quantity</td>
							<td>Subtotal</td>
					</tr>
					</thead>
					<tbody>
					<tr class="librebais">
						<td><span class="cancel-cart" style="cursor:pointer;">&times;</span></td>
						<td><a href=""><img src="{{ asset('asset/New/Lechonbaboy.jpg') }}"></a></td>
						<td><a href="">Lechon Pig</a></td>
						<td>5,000</td>
						<td class="cart-input"><input type="number" name="" placeholder="1"></td>
						<td>5,000</td>

					</tr>	
					</tbody>	
				</table>
				<div class="coupon-submit">	
						<div class="apply-coupon">
							<input type="text" name="" placeholder="Coupon code">
							<button>Apply coupon</button>
						</div>
						<div class="update-cart">	
							<button>Update cart</button>
						</div>
				</div>	
			</form>
			<div class="summary-conts">	
				<div class="summary-sub-cont">
					<div>	
							<span>Subtotal</span>
					</div>
					<div class="sub-total">	
							<span>5,000</span>
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
						<span style="color: #c4a256;">5,029</span>
					</div>
				</div>	
				<div class="proceed__">	
					<div>	
							<button class="__proceed-to">Proceed to Checkout</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection