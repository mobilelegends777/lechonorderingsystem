<div id="footer" class="footer-section">
			<div class="footer-container">
				<div class="footer-desc footer-company">
					<div class="footer-logo">
						<span class="des-logo">
							<img src="{{asset('images/logo.png')}}" class="footer-logos">
						</span>
						<div class="name-title">
							<span class="des1">Karne De Lame</span>
							<div class="des2">Fresh Meats</div>
						</div>
					</div>
					<div class="footer-info">
						<div class="info-paragraph">
							New to the store are our best Lechons. A perfect healthy snack or a nice topping for your cereal in the morning. We are a specialist food retailer and we have
						</div>
					</div>
				</div>
				<div class="footer-desc footer-tweets">
					<div class="footer-title-tweets">
						<span class="footer-title">Latest Tweets</span>
					</div>
					<div class="footer-tweet-time">
						<span><img src="{{asset('images/twits.png')}}" class="tweets"><i>30 minutes ago</i></span>
					</div>
				</div>
				<div class="footer-desc footer-gallery">
					<div class="footer-title-gallery">
						<span class="footer-title">Restaurant Gallery</span>
					</div>
					<div class="image-cont">
						<!-- append -->
					</div>					
				</div>
				<div class="footer-desc footer-contact-us">
					<div class="footer-title-contact">
						<span class="footer-title">Contact Us</span>
					</div>
					<div class="footer-contact-info">
						<div class="info-tel">
							<b class="info-contacts">Tel :</b>
							<span class="sp">+123456789</span>
						</div>
						<div class="info-phone">
							<b class="info-contacts">Phone :</b>
							<span class="sp">987654321</span>
						</div>
						<div class="info-fax">
							<b class="info-contacts">Fax :</b>
							<span class="sp">5455555</span>
						</div>	
						<div class="info-mail">
							<b class="info-contacts">Email :</b>
							<span class="sp">info@yourdomain.com</span>
						</div>
						<div class="info-address">
							<b class="info-contacts address">Address :</b>
							<span class="sp">12453 Avenue NYC, New York City, NYC, 98741</span>
						</div>	
						<div class="info-web">
							<b class="info-contacts">Website :</b>
							<span class="sp"></span>
						</div>
					</div>					
				</div>
			</div>
			<div class="footers-copyright">
				<!-- <p>myFooter</p> -->
				<div class="copyright">
					<span>Copyright 2021 by MJ Lechon | All rights reserved</span>
				</div>
				<div class="social-media-link">
					<ul class="social-icons">
						<!-- append -->
					</ul>
				</div>
				<div class="back-to-top">
					<button id="Btop">
						<img src="{{asset('images/btop.png')}}">
					</button>
				</div>
			</div>
		</div>
	
		<script>



$(document).ready(function(){
	for (var i = 1;i<13;i++){
		$('.image-cont').append(`
			<div class="gallery-images">
				<img src="{{asset('images/image${i}.jpg')}}">
			</div>
		`);


	}
	for (var x = 1; x < 5; x++){
		$('.social-icons').append(`
			<li class="social-media-icons"><a href="#"><img src="{{asset('images/social${x}.png')}}"></a></li>
		`);
	}
	setInterval(function(){
     $(".footer-tweet-time").toggle().slideDown();
    // $("#box1").toggle();
},3000);

var btn = $('#Btop');

		$(window).scroll(function() {
		  if ($(window).scrollTop() > 600) {
		    btn.addClass('show');
		  } else {
		    btn.removeClass('show');
		  }
		});

		btn.on('click', function(e) {
		  e.preventDefault();
		  $('html, body').animate({scrollTop:0}, '300');
		});
});
$(document).ready(function(){
	$('.sales1').toggle().fadeIn(2000);
});

		</script>