@extends('index')
@section('page_content')
<div class="page-container">
	<div class="page-sub-container">
		<h1>Past Order</h1>
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
				@for($i = 1; $i <5; $i++)
					<tr class="librebais">
						<td><span class="cancel-cart" style="cursor:pointer;">&times;</span></td>
						<td><a href=""><img src="{{ asset('asset/New/Lechonbaboy.jpg') }}"></a></td>
						<td><a href="">Lechon Pig</a></td>
						<td>5,000</td>
						<td><div  class="cart-input"><button  type="button" onclick="dec('qty',{{$i}})">-</button><input class="cartQty__{{$i}}" type="number" value="1" name="qty"><button type="button" onclick="inc('qty',{{$i}})">+</button></div></td>
						<td class="reorder-btn"><input type="reset" class="btn btn-default" value="Reorder"></td>
				@endfor
					</tbody>	
				</table>
				
			</form>
		
		</div>
	</div>
</div>
@endsection