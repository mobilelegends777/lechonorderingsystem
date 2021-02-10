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
					<tr class="title-carted">
							<td class="td1"></td>
							<td class="td2"></td>
							<td class="td3"></td>
							<td>Product</td>
							<td>Price</td>
							<td>Quantity</td>
							<td></td>
					</tr>
					</thead>
				<tbody class="cart-table-conts">
				@for($i = 1; $i <5; $i++)
					<tr class="librebais">
						<td><span class="cancel-cart" style="cursor:pointer;">&times;</span></td>
						<td class="carted-items">
						<div class="carted-item-image">
							<a href=""><img src="{{ asset('asset/New/Lechonbaboy.jpg') }}"></a>
						</div>
						<div class="carted-item-name">
							<a href="">Lechon Pig</a></td>
						</div>
						<td>5,000</td>
						<td><div  class="cart-input"><button  type="button" onclick="dec('qty',{{$i}})">-</button><input class="cartQty__{{$i}}" type="number" value="1" name="qty"><button type="button" onclick="inc('qty',{{$i}})">+</button></div></td>
						<td> <button class="btn btn-primary moves-center-myorder" type="submit">Reorder</button></td>
					</tr>
				@endfor
					</tbody>	
				</table>
		
				</form>
			</div>
	
		</div>
	</div>
</div>
@endsection