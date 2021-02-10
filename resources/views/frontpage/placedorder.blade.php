@extends('index')
@section('page_content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
</style>
<div class="order-container">
   <div class="container-form">
    <div class="Order Title">               
                
                <div class="order-success">
                    <h5>Thank You</h5>
                    <i class="fas fa-check"></i>
                    <h6>Congratulations.</h6>
                    <h6>Your Order was Completed Successfully.</h6>
                </div>
                <div class="success-msg">
                    <h6 class="art1"><strong>Hi {{$value[0]->firstname}},</strong></h6>
                    <h6 class="art2">We have receive your order.</h6>
                    <h6 class="art2">We will send you an Email or SMS the moment your order items are dispatched to your address.</h6>
                    <h6 class="art3">Your Order ID: {{$value[0]->id}}</h6>
                </div>
                               
                <div class="dropdown">
				<a href="{{asset('/')}}">
					<span class="des3"><button class="art-btn">GO TO HOME</button></span>
				</a>
			    </div>
            <div class="icon-gif">           
            <img src="{{asset('images/rider.gif')}}" class="avatar img-circle" alt="avatar">
            </div>
    </div>
   </div>
</div>

@endsection