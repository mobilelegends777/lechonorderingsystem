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
					<h2>Special Order</h2>
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
							<span><h4>Lechon</h4></span>
							<ul>
								<li><a href="{{asset('frontpage/special-order')}}">Whole Lechon Baboy</a></li>
								<li><a href="{{asset('frontpage/special-order')}}">Available per Kilo</a></li>
								<li><a href="{{asset('frontpage/special-order')}}">Lechon Belly</a></li>
								<li><a href="{{asset('frontpage/special-order')}}">Lechon Manok</a></li>
								<li><a href="{{asset('frontpage/special-order')}}">Lechon Baka</a></li>
							</ul>
							<div>
								<label for="amount">Filter by price</label>
  							</div>
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
							<div class="number-show">
								<span>Showing 1–16 of 20 results</span>
							</div>
							<div class="sort-items">
								<select>
									<option>Default sorting</option>
									<option>Sort by popularity</option>
									<option>Sort by price: Low to High</option>
									<option>Sort by price: High to Low</option>
								</select>
							</div>
						</div>
						<div class="shop-items-conts">
						@for($i = 7;$i <= 22; $i++)
							<div class="shop-items">
								<div class="shop-item-image">

									@if($value[0] == 'Input Address')
										<input type="hidden" name="" class="add-ress" value="{{$value[0]}}">
									@else
										<input type="hidden" name="" class="add-ress" value="{{$value[0]->address}}&nbsp;{{$value[0]->city}}">
									@endif

									<a href="#" class="shop-images-lechon" data-value="{{$i}}">
										<img src="{{asset('images/lechon'.$i.'.png')}}">
									</a>
									<a href="#" class="orderNow" data-value="{{$i}}">Order now</a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Lechon {{$i}}kg</div>
									<div class="shop-item-price">{{$i}}000.00</div>
								</div>
							</div>
						@endfor
						</div><!-- end items show -->

						<div class="shop-items-conts-col" style="display: none;">
						@for($x = 7;$x <= 22; $x++)
							<div class="shop-items shop-item-col shop-cols">
								<div class="shop-item-image">
									<a href="#" class="shop-images-lechon" data-value="{{$x}}">
										<img class="shop-imgs" src="{{ asset('images/lechon'.$x.'.png') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col shop-info-prices">
									<div class="shop-item-name-info shop-items-names">
										<div class="shop-item-name-col shop-name-col shop-itemname-cols">
											<span class="col-item-title col-names">Lechon {{$x}}kg</span>
											<div class="parag col-parags">
													<span>Lechon Baboy (De Leche for {{$x-6}}0 pax)</span>
											</div>
										</div>
										<div class="shop-item-info shop-carts">
											<div class="col-price carts-price1">
												<div class="shop-item-price prod-price">{{$x}}000.00</div>
												<div class="cart-shop-button"><button class="addcart cols-cart"></i>Order Now</button></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						@endfor
						</div>
							<!-- end item display col-->
						<div class="paginate">
							<span class="active"><a href="#">1</a></span>
							<span><a href="#">2</a></span>
							<span><a href="#"><i class="fa fa-angle-right"></i></a></span>
						</div>

					</div>
				</div>
				</div>
			</div>


	{{--<div class="shop-container">
			<div class="shop-sub-container">
				<div class="shop-img">
					<img src="{{ asset('asset/img/59.jpg') }}">
				</div>
				<span class="shop-company">
					<h2>Special Order</h2>
				</span>
			</div>
			<div class="form-container">
				<div class="order-conts">
						<span><h4>ORDER NOW</h4></span>	
							<div>
								<span><span class="asterisk">*</span> How do you want your order?</span>
							</div>
							<div class="radio-buttons">
								<div class="radio1">
									<input type="radio" name="orderType"> Pick-up
								</div>
								<div class="radio2">
									<input type="radio" name="orderType"> Delivery
								</div>
							</div>
							<div>
								<span><span class="asterisk">*</span> Date/Time</span>
							</div>
							<div class="date-time">
								<div class="date-when">
									<input type="datetime-local" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" class="datestime">
								</div>
							</div>
							<div class="pick-up-add">
								<div>
									<span><span class="asterisk">*</span>Address</span>
								</div>
								<div class="pickup-deliv">
									<input type="addresses" name="" class="inpt-address">
								</div>
								<div class="proceed-to">
									<button><i class="fa fa-arrow-right"></i><span>PROCEED</span></button>
								</div>
							</div>
				</div>
			</div>
	</div>--}}
	<script type="text/javascript">

     var address = $('.add-ress').val();

$('.orderNow').each(function(){
  $(this).on('click',function(e){
    e.preventDefault();
      var lechVal = $(this).data('value');
      // alert(lechVal);
      $('.shop-sub-container3').empty();
      $('.shop-sub-container3').append(`
      		<div class="form-container">
				<div class="order-conts">
							<div class="lechon-info">
								<div class="lechon-img">
									<img src="{{ asset('images/lechon${lechVal}.png') }}">
								</div>

								<div class="lechon-details">
									 <span><h4>Lechon Baboy ${lechVal}kg(Good for ${lechVal-6}0 pax)</h4></span>
						                <span><h3>₱ ${lechVal},000.00</h3></span> 
						              <div>
						                <ul>
						                	<li>Approximate No. of Person : ${lechVal-6}0</li>
						                	<li>Approximate Live Weight : ${lechVal} Kilos</li>
						                </ul>
						              </div>
					              </div>
							</div>
							<div class="payment-mehods">
								<div class="pay-conts">
									<div>
						                <span><span class="asterisk">*</span><b>Minimum Partial Payment is 50% per item</b></span>
					              	</div>
					               	<div class="radio-buttons">
						                <div class="radio1">
						                  <input type="radio" name="pay-amount"><b> 50% Partial Payment</b>
						                </div>
						                <div class="radio2">
						                  <input type="radio" name="pay-amount"><b> Full Amount </b>
					                	</div>
					                </div>
				                </div>
				                <div class="pay-conts">
									<div>
										<span><span class="asterisk">*</span> How do you want your order?</span>
									</div>
									<div class="radio-buttons">
										<div class="radio1">
											<input type="radio" name="orderType"> Pick-up
										</div>
										<div class="radio2">
											<input type="radio" name="orderType"> Delivery
										</div>
									</div>
								</div>
							</div>
							<div class="delivery-details">
							<div class="date-time">
								<div>
									<span><span class="asterisk">*</span> Date/Time</span>
								</div>
								<div class="date-when">
									<input type="datetime-local" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" class="datestime">
								</div>
							</div>
							<div class="pick-up-add">
								<div>
									<span><span class="asterisk">*</span>Address</span>
								</div>
								<div class="pickup-deliv">
									<input type="addresses" name="" class="inpt-address" value="${address}">
								</div>
								
							</div>
						</div>
						<div class="qty-proceed-to">
							<div class="quantities">
								<input type="number" name="" class="inpt-qty" value="1">
							</div>
							<div class="proceed-to">
								<button><i class="fa fa-arrow-right"></i><span>PROCEED</span></button>
							</div>
						</div>
				</div>
			</div>
      	
      `);
  });
});

$('.shop-images-lechon').each(function(){
  $(this).on('click',function(e){
    e.preventDefault();
      var lechVal = $(this).data('value');
      // alert(lechVal);
      $('.shop-sub-container3').empty();
      $('.shop-sub-container3').append(`
      		<div class="form-container">
				<div class="order-conts">
							<div class="lechon-info">
								<div class="lechon-img">
									<img src="{{ asset('images/lechon${lechVal}.png') }}">
								</div>

								<div class="lechon-details">
									 <span><h4>Lechon Baboy ${lechVal}kg(Good for ${lechVal-6}0 pax)</h4></span>
						                <span><h3>₱ ${lechVal},000.00</h3></span> 
						              <div>
						                <ul>
						                	<li>Approximate No. of Person : ${lechVal-6}0</li>
						                	<li>Approximate Live Weight : ${lechVal} Kilos</li>
						                </ul>
						              </div>
					              </div>
							</div>
							<div class="payment-mehods">
								<div class="pay-conts">
									<div>
						                <span><span class="asterisk">*</span><b>Minimum Partial Payment is 50% per item</b></span>
					              	</div>
					               	<div class="radio-buttons">
						                <div class="radio1">
						                  <input type="radio" name="pay-amount"><b> 50% Partial Payment</b>
						                </div>
						                <div class="radio2">
						                  <input type="radio" name="pay-amount"><b> Full Amount </b>
					                	</div>
					                </div>
				                </div>
				                <div class="pay-conts">
									<div>
										<span><span class="asterisk">*</span> How do you want your order?</span>
									</div>
									<div class="radio-buttons">
										<div class="radio1">
											<input type="radio" name="orderType"> Pick-up
										</div>
										<div class="radio2">
											<input type="radio" name="orderType"> Delivery
										</div>
									</div>
								</div>
							</div>
							<div class="delivery-details">
							<div class="date-time">
								<div>
									<span><span class="asterisk">*</span> Date/Time</span>
								</div>
								<div class="date-when">
									<input type="datetime-local" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09" class="datestime">
								</div>
							</div>
							<div class="pick-up-add">
								<div>
									<span><span class="asterisk">*</span>Address</span>
								</div>
								<div class="pickup-deliv">
									<input type="addresses" name="" class="inpt-address" value="${address}">
								</div>
								
							</div>
						</div>

						<div class="qty-proceed-to">
							<div class="quantities">
								<input type="number" name="" class="inpt-qty" value="1">
							</div>
							<div class="proceed-to">
								<button><i class="fa fa-arrow-right"></i><span>PROCEED</span></button>
							</div>
						</div>
				</div>
			</div>
      	
      `);
  });
});
$(function() {

$(window).scroll(function() {
		  if ($(window).scrollTop() > 600) {
		    $('.shop-filters').css({
		    	'position':'fixed',
		    	'top':0,
		    	'background':'#fff',
		    });
		  }
		  else if($(window).width() <= 900){
		  	$('.shop-filters').css({
		    	'position':'relative',
		    	'top':'initial',
		    	'width':'450px'
		    });
		  } 
		  else {
		    $('.shop-filters').css({
		    	'position':'relative',
		    	'top':'initial'
		    });
		  }
		});
});

	</script>
	@endsection	