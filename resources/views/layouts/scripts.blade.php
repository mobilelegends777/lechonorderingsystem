<script>

var myIndex = 0;
carousel()
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

</script>
<script>

$('.slider').slick({
  dots: true,
  mobileFirst:false,
  // customPaging : function(slider, i) {
  //       return '<ul><li role="presentation></li><li role="presentation" class="slick-active"></li></ul>';},
  infinite: true,
  speed: 1500,
  centerMode: true,
  // centerPadding: '40px',
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        mobileFirst:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// $(document).ready(function(){
// 	$('.item-image').hover(function(){
// 		$(this).each(function(){
// 			// alert(1);
// 			$('.cart-icon').show();
// 		});
// 	});
// });

// $(document).ready(function(){
//     $(".__item").hover(function(){
//     	$('.items-price').each(function(){
//         $(this).css("background", "#a11001");
//         })
//     },
//     function(){
//         $('.items-price').css("background", "#f6f4f2");
//     });
// });



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

// end back to top

// image resize on scroll
// $(window).scroll(function() {
//   var onScrollmargin = $(document).scrollTop();
//   var heightChanged = 850 - $(document).scrollTop();
//     $(".slider-conts").css( { marginLeft : onScrollmargin, marginRight : onScrollmargin } );
//     $('.slider-conts').height(heightChanged);
//     $('.slider-conts img').height(heightChanged);
    
// });
$(window).scroll(function() {
  var heightChanged = 850 - $(document).scrollTop();
    $(".slider-conts").height(heightChanged);
    $('.slider-conts img').height(heightChanged);

});
// end image resize on scroll
</script>






<script type="text/javascript"> 
// topnav show
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
       $('#my-searches').hide();
        x.className += " responsive";
    }else{
        x.className = "topnav";
    }
} 
// end topnav show

// mobile topnav dropdown
$(document).ready(function(){
  $('.dropbtn1').on('click',function(){
      $('.seafoodDrp').toggle();
  });
  $('.dropbtn2').on('click',function(){
      $('.meatDrp').toggle();
  });

var mouse_is_inside = false;


    $('.dropbtn1').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) $('.seafoodDrp').hide();
    });
var mouse_is_inside = false;


    $('.dropbtn2').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) $('.meatDrp').hide();
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
// end search mobile
//  add to cart sidenav
  $('.toggle-cart-sidenav').click(function(){
      $('.add-to-cart-items').width(300);
      $('.add-to-cart-items').height('auto');
      $('.add-to-cart-items').css({background: '#fff'});
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