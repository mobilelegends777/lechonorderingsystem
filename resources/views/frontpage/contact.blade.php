<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant System</title>
	<link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style_asset.css')}}" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}" />
	 <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline|Yanone+Kaffeesatz" rel="stylesheet">
    <script src="{{asset('asset/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('asset/js/jquery.aniview.js')}}"></script>
	@include('layouts.csslinks')

    
	<script>
        $(document).ready(function(){
            $('.aniview').AniView();
        });
    </script>
	
	
  </head>
  
  
  
  
<body>

@include('headpage.header')

<section id="head_contact" class="clearfix">
  <div class="container">
  <div class="row">
   <div class="head_contact clearfix">
   <h2>Contact Us</h2>
   </div>
  </div>
 </div>
</section>
 
 <section id="contact">
    <div class="container">
	  <div class="row">
	  <div class="contact clearfix">
	    <div class="col-sm-12">
		   <h1 class="text-center">Contact Us</h1>
		   <div class="col-sm-4">
		    <div class="contact_1 text-center">
			  <p class="text_1"><i class="fa fa-map-marker"></i></p>
			  <h3>Address</h3>
			  <span class="text_1">Gaisano Mall, Villaverde Rd, Iligan City, Lanao del Norte</span>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="contact_1 text-center">
			  <p class="text_2"><i class="glyphicon glyphicon-earphone"></i></p>
			  <h3>Phone</h3>
			  <span class="text_1">Telephone: 0917 728 9990</span>
			</div>
		   </div>
		   <div class="col-sm-4">
		    <div class="contact_1 text-center">
			  <p class="text_2"><i class="fa fa-envelope"></i></p>
			  <h3>E-mail</h3>
			  <span class="text_1">E-mail: <a href="detail.html">info@gmail.com</a></span>
			</div>
		   </div>
		</div>
		<div class="col-sm-12 contact_bottom clearfix">
		 <div class="contact_bottom_main clearfix">
		  <div class="col-sm-6 contact_bottom_main_left clearfix">
		   <div class="contact_bottom_main_left_top clearfix">
		    <h3 class="text-center touch">Get In Connect With Our Company</h3>
		   <div class="">
		   <div class="contact_2">
		    <input class="form-control" type="text" placeholder="Name">
		   </div>
		  </div>
		   <div class="">
		   <div class="contact_2">
		    <input class="form-control" type="text" placeholder="Email">
		   </div>
		  </div>
		   <div class="">
		   <div class="contact_2">
		    <input class="form-control" type="text" placeholder="Telephone">
		   </div>
		  </div>
		   <div class="col-sm-12 contact_3 clearfix">
		    <div class="contact_3_top">
			  <textarea placeholder="Message..." class="form-control form_1"></textarea>
			   <a href="detail.html">Submit</a>
			</div>
		  </div>
		   </div>
		  </div>
		  <div class="col-sm-6 contact_bottom_main_right clearfix">
		   <div class="contact_bottom_main_right_top clearfix">
		   <iframe width="464" height="431" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=464&amp;height=431&amp;hl=en&amp;q=MJ%20Lechon%20House,%20Villaverde%20Road,%20Iligan%20City,%20Lanao%20del%20Norte%20Iligan%20City+(Map)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embedmap.org/'>embed a google map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=26110288211da3fbbb554087e25912bccefd9f8f'></script>
		   </div>
		  </div>
		 </div>
		</div>
	  </div>
	  </div>
	</div>
   </section>

   @include('headpage.footer')
   @include('layouts.scripts')

</body>
      
</html>
