@extends('index')
@section('page_content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<div class="shop-container">
			<div class="shop-sub-container">
				<div class="shop-img">
					<img src="{{ asset('asset/img/59.jpg') }}">
				</div>
				<span class="shop-company">
					<h2>Shop With MJ Lechon</h2>
				</span>
			</div>
			<div class="shop-anchors-filter">
				<div class="shop-anchors">
					<a href="#"><span class="active">Home</span></a>&nbsp;/&nbsp;<a href="#"><span>Menu</span></a>
				</div>
				<div class="filter-btn">
					<button class="filter-show-btn"><span class="filter-show">Filters</span></button>
				</div>
			</div>
		<div class="shop-sub-conts">
			<div class="shop-conts">
				<div class="shop-sub-container2">
					<div class="shop-filters">
						<span class="close-btn">&times;</span>
						<span class="title-header"><h3>Categories</h3></span>
						<div class="filter-cat">
							<span>Menu</span>
							<ul>
								@foreach($value[2] as $item)
									<li class="menu-category"><a href="" class="catType" data-value="{{$item->id}}">{{$item->description}}</a></li>
								@endforeach
									<li class="menu-category"><a href="{{asset('frontpage/special-order')}}" class="" data-value="">Special Order</a></li>
							</ul>
							<div class="filter-price">
								<label for="amount">Filter by price</label>
  							<div id="slider-range"></div>
  							<div class="price-range">
  								<label for="amount">Price: </label>
  								<span id="amount"></span>
  								<br>
  								<button class="filter-by-price">Filter</button>
  							</div>
							</div>
						</div>
					</div>
					</div>			
				</div>
				<div class="shop-sub-container3">
					<div class="filter-conts">
						<div class="shop-sorting">
							<div class="sort-row-column">
								<a href="#" class="arrangeRow">
									<i class="fas fa-th" aria-hidden="true"></i>
								</a>
								<a href="#" class="arrangeCol">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
							</div>
							<div class="number-show" id="count-results">
								<span>Showing 1–16 of 20 results</span>
							</div>
							<div class="sort-items">
								<select id="sort-items">
									<option>Default sorting</option>
									<option>Sort by popularity</option>
									<option data-sort="price:asc">Sort by price: Low to High</option>
									<option data-sort="price:desc">Sort by price: High to Low</option>
								</select>
							</div>
						</div>
						<div class="shop-items-conts">
						@if(array_key_exists('3',$value))
							@if(count($value[3]) > 0)
								@foreach($value[3] as $item)
								<div class="shop-items">
									<div class="shop-item-image">
										<a class="shop-images">
											<img src="{{ $item->images }}">
										</a>
										@if(Auth::check())
											@if($item->order_exist == 1)
											<div class="cartIcon{{ $item->product_id }} cart-icon">
												<span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
											</div>
											@else
											<div class="cartIcon{{ $item->product_id }} cart-icon">
												<a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="{{ $item->product_id }}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a>
											</div>
											@endif
										@else
											<div class="cartIcon{{ $item->product_id }} cart-icon">
												<a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="{{ $item->product_id }}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a>
											</div>
										@endif
									</div>
									<div class="shop-info-price">
										<div class="shop-item-name">{{ $item->name }}</div>
										<div class="shop-item-price">₱{{ number_format($item->price,2)}}</div>
									</div>
								</div>
								@endforeach
							@else
							<span class="messages"> <strong>{{$value[4]}}</strong> not found.</span>
							@endif
						@else
						@foreach($value[1] as $item)
							<div class="shop-items">
								<div class="shop-item-image">
									<a class="shop-images">
										<img src="{{ $item->images }}">
									</a>
									@if(Auth::check())
										@if($item->order_exist == 1)
										<div class="cartIcon{{ $item->product_id }} cart-icon">
											<span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
										</div>
										@else
										<div class="cartIcon{{ $item->product_id }} cart-icon">
											<a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="{{ $item->product_id }}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a>
										</div>
										@endif
									@else
										<div class="cartIcon{{ $item->product_id }} cart-icon">
											<a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="{{ $item->product_id }}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a>
										</div>
									@endif
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">{{ $item->name }}</div>
									<div class="shop-item-price">₱{{ number_format($item->price,2)}}</div>
								</div>
							</div>
						@endforeach
						@endif
						</div><!-- end items show -->

						<div class="shop-items-conts-col" style="display: none;">
						@foreach($value[1] as $item)
							<div class="shop-items shop-item-col shop-cols">
								<div class="shop-item-image">
									<a href="#">
										<img class="shop-imgs" src="{{ $item->images }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col shop-info-prices">
									<div class="shop-item-name-info shop-items-names">
										<div class="shop-item-name-col shop-name-col shop-itemname-cols">
											<span class="col-item-title col-names">{{ $item->name }}</span>
											<div class="parag col-parags">
												<div>{{ $item->description }}</div>
											</div>
										</div>
										<div class="shop-item-info shop-carts">
											<div class="col-price carts-price1">
												<div class="shop-item-price prod-price">₱{{ number_format($item->price,2)}}</div>
												<div class="shop-left">
											@if(Auth::check())
												@if($item->order_exist == 1)
													<span><i class="fas fa-check"></i>On cart</span>
												@else
													<button class="addcart cols-cart{{$item->product_id}}" onclick="addC.addInCart({{$item->product_id}})"><i class="fa fa-cart-plus"></i>Add to cart</button>
												@endif
											@else
													<button class="addcart cols-cart{{$item->product_id}}" onclick="addC.addInCart({{$item->product_id}})"><i class="fa fa-cart-plus"></i>Add to cart</button>
											@endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
						</div><!-- end item display col-->

						<div class="paginate">
							<span class="active"><a href="#">1</a></span>
							<span><a href="#">2</a></span>
							<span><a href="#"><i class="fa fa-angle-right"></i></a></span>
						</div>

					</div>
				</div>
				</div>
			</div>
<script>
// $(function() {

// $(window).scroll(function() {
// 		  if ($(window).scrollTop() > 600) {
// 		    $('.shop-filters').css({
// 		    	'position':'fixed',
// 		    	'top':0,
// 		    	'background':'#fff',
// 		    });
// 		  }
// 		  else if($(window).width() <= 900){
// 		  	$('.shop-filters').css({
// 		    	'position':'relative',
// 		    	'top':'initial',
// 		    	'width':'450px'
// 		    });
// 		  } 
// 		  else {
// 		    $('.shop-filters').css({
// 		    	'position':'relative',
// 		    	'top':'initial'
// 		    });
// 		  }
// 		});
// });
$(document).ready(function(){
	$('.catType').each(function(){
		var cat = $(this).data('value');
		var url = window.location.origin;
		
		$(this).on('click', function(e){
			e.preventDefault();
			$.ajax({
				headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
				type:'POST',
				url: url+'/filter-foods',
				data:{category:cat},
				success:function(data)
				{
					
					$('.shop-items-conts').empty();
					$('.shop-items-conts-col').empty();
					
					// console.log(data);
					$.each(data, function(i, item){
							// console.log(item.order_exist);
						if(item.order_exist == 0){
							$('.shop-items-conts').append(`
								<div class="shop-items">
									<div class="shop-item-image">
										<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
											<img src="${item.images}">
										</a>
										<div class="cartIcon${item.product_id} cart-icon">
											<a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a href="">
										</div>
									</div>
									<div class="shop-info-price">
										<div class="shop-item-name">${item.name}</div>
										<div class="shop-item-price" data-price="${item.price}">₱${item.price}</div>
									</div>
								</div>
							`);
						}else if(item.order_exist == 1){
							$('.shop-items-conts').append(`
								<div class="shop-items">
									<div class="shop-item-image">
										<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
											<img src="${item.images}">
										</a>
										<div class="cartIcon${item.product_id} cart-icon">
											<span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
										</div>
									</div>
									<div class="shop-info-price">
										<div class="shop-item-name">${item.name}</div>
										<div class="shop-item-price">₱${item.price}</div>
									</div>
								</div>
							`);
						}
					});
					
					
					$.each(data, function(i, item){
							
							$('.shop-items-conts-col').append(`
							<div class="shop-items shop-item-col shop-cols">
								<div class="shop-item-image">
									<a href="#">
										<img class="shop-imgs" src="${item.images}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col shop-info-prices">
									<div class="shop-item-name-info shop-items-names">
										<div class="shop-item-name-col shop-name-col shop-itemname-cols">
											<span class="col-item-title col-names">${item.name}</span>
											<div class="parag col-parags">
												<div>${item.description}</div>
											</div>
										</div>
										<div class="shop-item-info shop-carts">
											<div class="col-price carts-price1">
												<div class="shop-item-price prod-price">₱${item.price}</div>
												<div class="shop-left">
													<button class="addcart cols-cart" onclick="addC.addInCart(${item.product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							`);
	
					});
					
				}
			});
			
		});
	});
});
</script>
@endsection
