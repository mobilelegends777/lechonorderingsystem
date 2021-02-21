<script>

var myIndex = 0;
carousel();
function carousel() {
  // var x = $('.myslides');
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 1; i < x.length; i++) {
    x[i].style.display = "none"; 
    x[i].classList.remove("mystyle"); 
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block"; 
  x[myIndex-1].classList.add("mystyle");
  $('.mySlides').css({opacity:0.6}).animate({opacity:1});
  $('.sales1').fadeIn()
      .css({top:300,opacity: -5})
      .delay( 1000 )
      .animate({top:200,opacity: 1}, 1500, function() {
          //callback
      });

  setTimeout(carousel, 5000);

}
// $('.slider-conts').slick({
//   dots: false,
//   autoplay: true,
//   infinite: true,
//   speed: 500,
//   fade: true,
//   cssEase: 'linear'
// });
</script>
<script>

// this is temporary
// $(this).resize(function(){
//   this.location.reload();
// });
// end reload every resize;
  var windowWidth = $(window).width();

if(windowWidth < 768 && windowWidth != 360 && windowWidth != 320){

   $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 1500,
    centerMode: true,
    autoplay: true,
    lazyLoad: 'ondemand',
    slidesToShow: 2,
    slidesToScroll: 1

  });
}
else if (windowWidth == 768){
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 1500,
    centerMode: true,
    autoplay: true,
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1

  });
}
else if(windowWidth <= 360){
   $('.slider').slick({
    dots: false,
    infinite: true,
    speed: 1500,
    centerMode: true,
    autoplay: true,
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1

  });
}
else {

 $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 1500,
    centerMode: true,
    autoplay: true,
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1

  });
}//end if

// -----------------------------------slick slider original----------------
// $('.slider').slick({
//     dots: true,
//     mobileFirst:false,
//     // customPaging : function(slider, i) {
//     //       return '<ul><li role="presentation></li><li role="presentation" class="slick-active"></li></ul>';},
//     infinite: true,
//     speed: 1500,
//     centerMode: true,
//     // centerPadding: '40px',
//     autoplay: true,
//     slidesToShow: 4,
//     slidesToScroll: 1,
//   // responsive: [
//   //   {
//   //     breakpoint: 768,
//   //     settings: {
//   //       // mobileFirst:true,
//   //       slidesToShow: 2,
//   //       slidesToScroll: 1,
//   //       infinite: true,
//   //       dots: true
//   //     }
//   //   },
//   //   {
//   //     breakpoint: 600,
//   //     settings: {
//   //       slidesToShow: 2,
//   //       slidesToScroll: 1
//   //     }
//   //   },
//   //   {
//   //     breakpoint: 480,
//   //     settings: {
//   //       slidesToShow: 1,
//   //       slidesToScroll: 1
//   //     }
//   //   }
//   //   // You can unslick at a given breakpoint now by adding:
//   //   // settings: "unslick"
//   //   // instead of a settings object
//   // ]
// });
// ------------------------------------------------end slick orig---------------------
</script>

<script>


$(document).ready(function(){
  // footer
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
// end footer

// back to top 
var btn = $('#Btop');

		$(window).scroll(function() {
		  if ($(window).scrollTop() > 800) {
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

// end back to top

// image resize on scroll
    // $(window).scroll(function() {
    //   var onScrollmargin = $(document).scrollTop();
    //   var heightChanged = 850 - $(document).scrollTop();
    //     $(".slider-conts").css( { marginLeft : onScrollmargin, marginRight : onScrollmargin } );
    //     $('.slider-conts').height(heightChanged);
    //     $('.slider-conts img').height(heightChanged);
        
    // });
    // this function is laggy in IOS
    
// end image resize on scroll
var currentMousePos = { x: -1, y: -1 };
  $(document).mousemove(function(event) {
      currentMousePos.x = event.pageX;
      currentMousePos.y = event.pageY;
      // console.log(currentMousePos.y);

  });

  // // ELSEWHERE, your code that needs to know the mouse position without an event
  // if (currentMousePos.x < 10) {
  //     // ....
  // }

</script>






<script type="text/javascript"> 
// topnav show
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav subtop") {
       $('#my-searches').hide();
        x.className += " responsive";
    }else{
        x.className = "topnav subtop";
    }
} 
// end topnav show

// mobile topnav dropdown
$(document).ready(function(){
  $('.dropbtn1').click(function(){
      $('.seafoodDrp').toggle();
  });
  $('.dropbtn2').click(function(){
      $('.meatDrp').toggle();
  });

  $(document).scroll(function(){
      $('#myDropdown').css({'display':'none'});
    });



var mouse_is_inside = false;


    $('.dropbtn2').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").click(function(){ 
        if(! mouse_is_inside) $('.meatDrp').css({'display': 'none'});
    });
});
// end mobile topnav dropdown
</script>

<script type="text/javascript">
	$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
})
// mobile search input
  $('.search-icon').click(function(){
      $('#my-searches').toggle();
  });
  $('.back-search').on('click', function(){
      $('#my-searches').toggle();
  });
// end search mobile
//  add to cart sidenav
  $('.toggle-cart-sidenav').click(function(){
      $('.add-to-cart-items').width(500);
      $('.add-to-cart-items').height('auto');
      $('.add-to-cart-items').css({background: '#dedcdc'});
      $('.cart-title').show();
      $('.items-on-cart-container').show();
  });

  $('.toggle-cart-sidenav').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside){ 
          $('.add-to-cart-items').width(0);
          $('.add-to-cart-items').height(0);
          $('.cart-title').hide();
          $('.items-on-cart-container').hide();
        }
    });
//  end add to cart sidenav
</script>

<script>
// $(document).ready(function(){

// /*****Fixed Menu******/
// var secondaryNav = $('.cd-secondary-nav'),
//    secondaryNavTopPosition = secondaryNav.offset().top;
// 	$(window).on('scroll', function(){
// 		if($(window).scrollTop() > secondaryNavTopPosition ) {
// 			secondaryNav.addClass('is-fixed');	
// 		} else {
// 			secondaryNav.removeClass('is-fixed');
// 		}
// 	});	
	
// });
</script>

<script>
	$(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
  </script>
  
  <script>

function toggleResetPswd(e){
    e.preventDefault();
    $('.login-reg-form .form-signin').toggle() // display:block or none
    $('.login-reg-form .reset-pass').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('.login-reg-form .form-signin').toggle(); // display:block or none
    $('.login-reg-form .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('.login-reg-form #forgot_pswd').click(toggleResetPswd);
    $('.login-reg-form #cancel_reset').click(toggleResetPswd);
    $('.login-reg-form #btn-signup').click(toggleSignUp);
    $('.login-reg-form #cancel_signup').click(toggleSignUp);
})
$('.arrangeRow').on('click', function(e){
    // alert(1);
    e.preventDefault();
    $('.shop-items-conts').show();
    $('.shop-items-conts-col').hide();

});
$('.arrangeCol').on('click', function(e){
    e.preventDefault();
    $('.shop-items-conts').hide();
    $('.shop-items-conts-col').show();
});

    // mobile filters
    showFilter();
    function showFilter(){
      $('.filter-show-btn').on('click', function(){
          $('.shop-conts').addClass('showing');
      });
    }
    $('.close-btn').on('click', function(){
        $('.shop-conts').removeClass('showing');
    });
    // end mobile filters


</script>
<script type="text/javascript">
   $( "#slider-range" ).slider({
      range: true,
      min: 20,
      max: 1000,
      values: [ 20, 1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).text( " ₱" + ui.values[ 0 ] + " - ₱" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).text( " ₱" + $( "#slider-range" ).slider( "values", 0 ) +
      " - ₱" + $( "#slider-range" ).slider( "values", 1 ));


      
var inp = $('.cart-input').length;
function inc(element, id) {
      var cart_price= $('.cart-price'+id).val();
      var number = $('.cartQty__'+id).val();
      $('.cartQty__'+id).val(parseInt(number)+1);
      var qty = $('.cartQty__'+id).val();
      $('.subtotal'+id).empty();
      $('.subtotal'+id).append(` <span class="substotals">${ qty * cart_price}</span>`);
      var cartSub = $('.cart-tot-price'+id).val();
      $('.substotal'+id).empty();
      $('.substotal'+id).append(`Total: <span class="substotals">${ qty * cartSub}</span>`);
      // alert($('.substotals').text());
      subTOTS();
}
function dec(element, id) {
  var number = $('.cartQty__'+id).val();
  if (parseInt(number) > 1) {
    $('.cartQty__'+id).val(parseInt(number)-1);
  }
  var qty = $('.cartQty__'+id).val();
  var cart_price= $('.cart-price'+id).val();
  $('.subtotal'+id).empty();
  $('.subtotal'+id).append(`<span class="substotals">${cart_price*qty}</span>`);
  var cartSub = $('.cart-tot-price'+id).val();
  $('.substotal'+id).empty();
  $('.substotal'+id).append(`Total: <span class="substotals">${ qty * cartSub}</span>`);
  subTOTS();
}
function subTOTS(){
  var sum = 0;
  $('.substotals').each(function(){
    var subs = Number($(this).text());
        sum += subs;
  });
  $('.sub_tot').text("₱"+sum);
}
</script>

<script>
$(document).ready(function(){
 
    $("#myDIV").hide();
    $("#MyAdd").hide();

 
  $("#show").click(function(){
    $("#myDIV").toggle();
    
    $("#contacts").toggle();
    



  });

  $("#show2").click(function(){
    $("#MyAdd").toggle();
    $("#adds").toggle();
  
    



  });


});
</script>
	
<script>
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




</script>

<script>
		const loader = document.querySelector('.loader');
		const container = document.querySelector('.container');

		function init() {
		setTimeout(() => {
			loader.style.opacity = 0;
			loader.style.display = 'none';

			container.style.display = 'block';
			setTimeout(() => (container.style.opacity = 1), 50);
		}, 2000);
		}

		init();
    
    var pageURL = window.location.href;
    var lastURLSegment = pageURL.substr(pageURL.lastIndexOf('/') + 1);

    if(lastURLSegment == 'checkout'){
      $('.toggle-cart-sidenav').css({
        'display':'none'
      });
    }else if(lastURLSegment == 'cartpage'){
      $('.toggle-cart-sidenav').css({
        'display':'none'
      });
    }

    
    cartI();

	</script>

  <script type="text/javascript">
    

// $(function() {

// var prevScrollpos = window.pageYOffset;

// $(window).scroll(function(){

//     if($(window).width() < 750){
//       var currentScrollPos = window.pageYOffset;
//       if (prevScrollpos < currentScrollPos && currentScrollPos > 250) {
//         document.getElementById("header_scroll").style.display = "none";
//       } else {
//         document.getElementById("header_scroll").style.display = "block";
//       }
//       prevScrollpos = currentScrollPos;
//     }


//       // alert(slideHeight);
      
//     });
// });

var position = $(window).scrollTop(); 

// should start at 0
var slideHeight = $('.slider-conts').height();
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > position) {
        console.log('scrollDown');
         document.getElementById("header_scroll").style.display = "none";
    } else {
         console.log('scrollUp');
         document.getElementById("header_scroll").style.display = "block";
    }
    position = scroll;

    var heightChanged = slideHeight - scroll;
    if (heightChanged > 550 ) {
      $(".slider-conts").height(heightChanged);
      $('.slider-conts img').height(heightChanged);
    }
      
});
  </script>
    
