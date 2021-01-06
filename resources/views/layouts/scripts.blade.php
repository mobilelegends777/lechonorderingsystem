<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 1; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
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
  setInterval(function(){
	  $('.sales1').toggle().fadeIn(3000);
  }, 5000);
});

// onscroll change image size
// $(window).scroll(function() {
//   var scroll = $(window).scrollTop();
//   $(".slider-conts img").css({
//     transform: 'translate3d(-50%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/5)/100+')',
    //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
    //"-webkit-filter": "blur(" + (scroll/200) + "px)",
    //filter: "blur(" + (scroll/200) + "px)"
//   });
// });
</script>






<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    }else{
        x.className = "topnav";
    }

  //   function drop_Selc() {
  //     document.getElementById("myDropdown").classList.toggle('show');
  // }

  // // Close the dropdown if the user clicks outside of it
  // window.onclick = function(event) {
  //   if (!event.target.matches('.dropbtn1')) {
  //     var dropdowns = document.getElementsByClassName("dropdown-content");
  //     var i;
  //     for (i = 0; i < dropdowns.length; i++) {
  //       var openDropdown = dropdowns[i];
  //       if (openDropdown.classList.contains('show')) {
  //         openDropdown.classList.remove('show');
  //       }
  //     }
  //   }
  // }

} 
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
	</script>

