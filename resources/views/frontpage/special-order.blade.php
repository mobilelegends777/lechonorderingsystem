@extends('index')
@section('page_content')
	<div class="shop-container">
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
								<!-- <div class="oras">
									<select class="hour-when">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
								<div class="minoto">
									<select class="minute-when">
										<option>00</option>
										<option>15</option>
										<option>30</option>
										<option>45</option>
									</select>
								</div>
								<div class="adlaw">
									<select>
										<option>AM</option>
										<option>PM</option>
									</select>
								</div> -->
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
	</div>
	@endsection
