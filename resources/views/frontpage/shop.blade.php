@extends('index')
@section('page_content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="container">
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
					<a href="#"><span class="active">Home</span></a>&nbsp;/&nbsp;<a href="#"><span>Shop</span></a>
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
							<span>Seafood</span>
							<ul>
								<li><a href="">Daing na Bangus</a></li>
								<li><a href="">Shrimp Sinigang</a></li>
							</ul>
							<span>Meat</span>
							<ul>
								<li><a href="">Lechon Baboy</a></li>
								<li><a href="">Lechon Manok</a></li>
								<li><a href="">Liempo</a></li>
								<li><a href="">Pork BBQ</a></li>
								<li><a href="">Liver BBQ</a></li>
							</ul>
							<div>
								<label for="amount">Filter by price</label>
  							</div>
  							<div id="slider-range"></div>
  							<div class="price-range">
  								<input type="text" id="amount" readonly style="border:0; color: black; font-weight:bold;">
  							</div>
							<span>Menu</span>
							<ul>
								<li><a href="{{asset('frontpage/newproduct')}}">New Products</a></li>
								<li><a href="{{asset('frontpage/combomeal')}}">Combo Meals</a></li>
								<li><a href="{{asset('frontpage/dessert')}}">Desserts</a></li>
								<li><a href="{{asset('frontpage/drinks')}}">Drinks</a></li>
								<li><a href="{{asset('frontpage/appetizer')}}">Appetizers</a></li>
							</ul>
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
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{asset('asset/Combo/A1.jpg')}}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Pork BBQ</div>
									<div class="shop-item-price">250.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{asset('asset/Combo/A2.jpg')}}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Chicken Paa</div>
									<div class="shop-item-price">450.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{asset('asset/Combo/A3.jpg')}}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Chicken Breast</div>
									<div class="shop-item-price">250.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{ asset('images/Liverbbq.jpg') }}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Liver BBQ</div>
									<div class="shop-item-price">70.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{ asset('images/Porkbbq.jpg') }}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Pork BBQ</div>
									<div class="shop-item-price">50.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{ asset('images/Sinigangshrimp.jpg') }}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Sinigang Shrimp</div>
									<div class="shop-item-price">170.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{asset('asset/New/Breastbbq.jpg')}}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Breast BBQ</div>
									<div class="shop-item-price">150.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{ asset('images/Lechon rice.jpg') }}">
									</a>
									<a href="#" class="shop-cart-icon"><i class="fa fa-cart-plus" aria-hidden="true" ></i></a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Lechon Rice</div>
									<div class="shop-item-price">50.00</div>
								</div>
							</div>
							<div class="shop-items">
								<div class="shop-item-image">
									<a href="{{asset('frontpage/shop-details')}}" class="shop-images">
										<img src="{{ asset('images/Paabbq.jpg') }}">
									</a>
									<a href="#" class="shop-cart-icon">
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</a>
								</div>
								<div class="shop-info-price">
									<div class="shop-item-name">Leg BBQ</div>
									<div class="shop-item-price">150.00</div>
								</div>
							</div>
						</div><!-- end items show -->

						<div class="shop-items-conts-col" style="display: none;">
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/liempo.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Liempo</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">250.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Lechonbaboy.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Lechon Pig</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">450.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Lechonmanok.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Lechon Chicken</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">250.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Liverbbq.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Liver BBQ</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">70.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Porkbbq.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Pork BBQ</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">15.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Sinigangshrimp.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Sinigang Shrimp</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">170.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Breastbbq.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Breast BBQ</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">150.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Lechon rice.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Lechon Rice</span>
											<div class="parag">
												<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">50.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shop-items shop-item-col">
								<div class="shop-item-image">
									<a href="#">
										<img src="{{ asset('images/Paabbq.jpg') }}">
									</a>
								</div>
								<div class="shop-info-price shop-price-col">
									<div class="shop-item-name-info">
										<div class="shop-item-name-col shop-name-col">
											<span class="col-item-title">Leg BBQ</span>
											<div class="parag">
											<span>Onions help to improve the digestive system, normalize water-salt metabolism and increase the tone of the body and also have an antiseptic and antimicrobial effect. As a result, onions should be consumed during an increased risk of catching a viral infection (usually autumn-winter-spring).</span>
											</div>
										</div>
										<div class="shop-item-info">
											<div class="col-price">
												<div class="shop-item-price">150.00</div>
												<div><button class="addcart"><i class="fa fa-cart-plus"></i>Add to cart</button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
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
		</div>

	</div>
	@endsection
