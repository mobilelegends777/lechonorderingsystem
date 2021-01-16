@extends('index')
@section('page_content')
	<link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style_asset.css')}}" rel="stylesheet">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}" />
	 <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Londrina+Outline|Yanone+Kaffeesatz" rel="stylesheet">
    <script src="{{asset('asset/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('asset/js/jquery.aniview.js')}}"></script>
	@include('layouts.csslinks')


<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">File Upload</button>
      </div>
      
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
      
        <h3>Personal info</h3> 
        <div class="prof">
        <a id="show-prof"class="col-lg-3">Edit Profile</a>
        <a id="show-pass"class="">Change Password</a>
        </div>

        <hr>
        
        <form metho="POST" action ="{{ route('profileupdated',$value['0']->id) }}" class="form-horizontal" role="form">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div id="edit-profile">
        <input class="form-control" type="hidden" name="id" value="{{$value['0']->id}}">
          <div class="form-group">
            <label class="col-lg-3 control-label">Full name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="{{$value['0']->name}}">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Contact #:</label>
            <div class="col-lg-8">
              <input class="form-control" name="phone"type="text" value="{{$value['0']->phone}}" maxlength="11">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Home Address:</label>
            <div class="col-lg-8">
              <input class="form-control" name="address"type="text" value="{{$value['0']->address}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Work Address:</label>
            <div class="col-lg-8">
              <input class="form-control" name="address1"type="text" value="{{$value['0']->address1}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Hose No.:</label>
            <div class="col-lg-8">
              <input class="form-control" name="house"type="text" value="{{$value['0']->house_no}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <input class="form-control" name="city"type="text" value="{{$value['0']->city}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Zip Code:</label>
            <div class="col-lg-8">
              <input class="form-control" name="zip"type="text" value="{{$value['0']->zip_code}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Land Mark:</label>
            <div class="col-lg-8">
              <input class="form-control" name="land"type="text" value="{{$value['0']->land_mark}}">
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
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">  
            <button class="btn btn-primary" type="submit">Save Changes</button>
            
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

 
  $("#show-pass").click(function(){
    
    $("#changess-pass").toggle();
    $("#edit-profile").hide();
   



  });

  $("#show-prof").click(function(){
    $("#edit-profile").toggle();
    $("#changess-pass").hide();
  
    



  });


});
</script>
@endsection