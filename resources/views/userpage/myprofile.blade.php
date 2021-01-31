@extends('index')
@section('page_content')
    <link href="{{asset('asset/css/style_asset.css')}}" rel="stylesheet">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
	
	<script type="text/javascript" src="{{asset('asset/js/jquery.aniview.js')}}"></script>

  <div id="map " class="move-rights">

<iframe width="100%" height="400" frameborder="0" style="border:0" src="" allowfullscreen></iframe>
</div>
<div class="container_profile">
  	<hr>
	<div class="row rows2">
      <!-- left column -->
      <div class="col-md-prof">
        <div class="text-center moves-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control file-size">
        </div>
        <button class="btn btn-primary moves-center" type="submit">File Upload</button>
      </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info move-lefts">
      
        <h3 class="p-info-size">Personal info</h3> 
        <div class="prof">
          <div class="move-left">
        <a id="show-prof"class="col-lg-3">Edit Profile</a>
        <a id="show-pass"class="">Change Password</a>
        <a id="show-address"class="">Addressess</a>
        
        </div>

        <hr class="hr-pr">
        
        <form metho="POST" action ="{{ route('profileupdated',$value[0]->id) }}" class="form-horizontal" role="form">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div id="edit-profile">
        <input class="form-control" type="hidden" name="id" value="{{$value[0]->id}}">
          <div class="form-group">
            <label class="col-lg-3 control-label">Firstname:</label>
            <div class="col-lg-8">
              <input class="form-control" name="fname" type="text" value="{{$value['0']->firstname}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Middlename:</label>
            <div class="col-lg-8">
              <input class="form-control" name="mname" type="text" value="{{$value['0']->middlename}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Lastname:</label>
            <div class="col-lg-8">
              <input class="form-control" name="lname" type="text" value="{{$value['0']->lastname}}">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone #:</label>
            <div class="col-lg-8">
              <input class="form-control" name="phone"type="text" value="{{$value['0']->phone}}" maxlength="11">
            </div>
          </div>

                 
          <div class="form-group">
            <label class="col-lg-3 control-label">Tel #:</label>
            <div class="col-lg-8">
              <input class="form-control" name="tel"type="text" value="{{$value['0']->tel}}" maxlength="11">
            </div>
          </div>
    

          </div>
          <div id="changess-pass">
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email"type="text" value="{{$value['0']->email}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password" type="password" value="{{$value[0]->password}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password" type="password" value="{{$value[0]->password}}">
            </div>
          </div>
          </div>

          <div id="addresses">

          <div class="form-group">
            <label class="col-lg-3 control-label">House #:</label>
            <div class="col-lg-8">
              <input class="form-control" name="house"type="text" value="{{$value['0']->house_number}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Zone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="zone"type="text" value="{{$value['0']->purok_zone}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Street:</label>
            <div class="col-lg-8">
              <input class="form-control" name="street"type="text" value="{{$value['0']->street}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Barangay:</label>
            <div class="col-lg-8">
              <input class="form-control" name="brngy"type="text" value="{{$value['0']->barangay}}">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Coordinate:</label>
            <div class="col-lg-8">
            <input class="form-control" id ="coordinate" name="lat" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
           <input class="form-control" name="city" type="text" value="{{$value['0']->city}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Land Mark:</label>
            <div class="col-lg-8">
              <input class="form-control" name="land"type="text" value="{{$value['0']->landmark}}">
            </div>
          </div>

          </div>
          <div class="move-to-right">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">  
            <button class="btn btn-primary moves-center-b" type="submit">Save Changes</button>
            
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

</html>

<script>
$(document).ready(function(){
 
    $("#changess-pass").hide();
    $("#addresses").hide();


 
  $("#show-pass").click(function(){
    
    $("#changess-pass").toggle();
    $("#edit-profile").hide();
    $("#addresses").hide();
   



  });

  $("#show-prof").click(function(){
    $("#edit-profile").toggle();
    $("#changess-pass").hide();
    $("#addresses").hide();
  
    



  });

  $("#show-address").click(function(){
    $("#edit-profile").hide();
    $("#changess-pass").hide();
    $("#addresses").toggle();
  
    



  });


});
</script>


<script>
  $(document).ready(function(){
  if ("geolocation" in navigator){

    navigator.geolocation.getCurrentPosition(function (p){
      
        showUserDetails(p.coords.latitude, p.coords.longitude);
    }, function (e) {
         ipLookup();

        
    });
    
  }else 
       ipLookup();
  });

  function showUserDetails(latitude, longitude, additional){
      
      $("#latitude").val(latitude);
      $("#longitude").val(longitude);
      var position = latitude + " " +longitude;

      $("#coordinate").val(position);
     
    
      var url ="https://www.google.com/maps/embed/v1/view?zoom=18&center="+position+"&key=AIzaSyCJT39R2xiBTLho8PChzfmDhgd0frzXLNM";
      $("iframe").attr('src',url);

      if (typeof additional != "undefined"){


      }

  }

  function ipLookup() {
    $.get('https://api.userinfo.io/userinfos', function (r){

        showUserDetails(r.position.latitude, r.position.longitude);

        //console.log(ipLookup);

    });

    


  }
    


</script>
@endsection