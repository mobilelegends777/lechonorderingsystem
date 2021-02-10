@extends('index')
@section('page_content')
<div class="page-container">
	<div class="page-sub-container">
		<h1>Past Order</h1>
		<div class="cartpage-item">
			<div class="cartpage-title">
			
				<table >
					<thead class="product-title">
					<tr class="title-carted">
							<td class="td1"></td>
							<td class="td2">Icon</td>
							<td class="td3"></td>
							<td>Product</td>
							<td>Price</td>
							<td>Action</td>
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
						<button type="button" class="reorder">Reorder</button>
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