@extends('index')
@section('page_content')

<div class="login-body">
    <div class="login-reg-form">
        <div class="login-container">
        <form class="form-signin" method="POST" action="{{ route('test222') }}">
        @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;color:#c4a265;"> Sign in</h1>
            <div class="social-log social-login ">
                <button class="btn facebook-btn social-btn" type="button"><a href="{{asset('login/facebook')}}"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button> </a>
            
                <button class="btn google-btn social-btn" type="button">  <a href="{{asset('login/google')}}"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
                </a>
            </div>
            <div class="account-log">
                <input id="email" type="email" class="form-control input_user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address" required="" autofocus="">
                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                <input id="password" type="password" class="form-control input_pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" required="">
                @error('password')  <div class="Error-Msg">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                    @enderror

                                    <div>
                                        @if(isset(Auth::user()->email))
                                        <div class="alert alert-success success-block">
                                            <strong>Welcome {{Auth::user()->email}} 

                                            </strong>
                                        </div>
                                        @endif
                                    </div>
            </div>
            <div class="signin-forgot"> 

                 <button type="submit" class="btn btn-success btn-block">
                                        <i class="fas fa-sign-in-alt" onclick="users()"></i> {{ __('Sign in') }}</button>
                                        
            </div>
            <div class="forgot-pass"><a href="#" id="forgot_pswd">Forgot password?</a></div>
            <div class="signup-new">
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign Up</button>
            </div>
        </form>
            <div class="reset-pass" style="display: none;">
                <form action="/reset/password/" class="form-reset">
                    <div class="input-button">
                            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                            <button class="btn reset-btn" type="submit">Reset Password</button>
                    </div>
                            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
                </form>
            </div>
            <form class="form-signup" method="POST" action="{{ route('register') }}" style="display: none;">
                        @csrf
                <div class="social-log scl-reg">
                <button class="btn facebook-btn social-btn" type="button"><a href="{{asset('login/facebook')}}"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button> </a>
            
            <button class="btn google-btn social-btn" type="button">  <a href="{{asset('login/google')}}"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </a>
                </div>
                <div class="signup-inputs">
                        <!-- <p style="text-align:center;color: #fff;">OR</p> -->

                        <input id="utype" type="hidden" class="form-control @error('utype') is-invalid @enderror" name="utype" value="{{ __('User') }}" required autocomplete="utype" readonly="readonly" display: none;>

                                @error('utype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <div class="for-flex">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="First name" required="" autofocus="">
                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Last name" required="" autofocus="">
                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                       
                    </div>
                     <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="name" autofocus placeholder="Phone#"  maxlength="11"required="" autofocus="">
                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                       

                    
                        <input id="purok" type="text" class="form-control @error('contact') is-invalid @enderror" name="purok" value="{{ old('purok') }}" required autocomplete="purok" autofocus placeholder="Address" required="" autofocus="">
                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" required autofocus="">
                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        <div class="for-flex">              
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" required autofocus="">
                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password" required autofocus="">
                        </div> 
                    </div>
                <div class="signup-button">
                        <button class="btn btn-primary btn-block sign-up" type="submit"><i class="fas fa-user-plus"></i>  {{ __('Sign Up') }}</button>
                        
                </div><br>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
    <div id="try">
            @include('sweetalert::alert')
            </div>
        </div>
        
    
    </div>
</div>
<!-- <script>
    $(function(){
        
        $("#form-signin").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:new FormData(this),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data){
                    if(data.status == 0){
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $('#form-signin')[0].reset();
                        alert(data.msg);
                    }
                }
            });
        });
    });
</script> -->


<!-- <script>
    function users() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta=[name="csrf-token"]').attr('content');

        $.ajax({

            url:"/getusers",
            type:'get',
            data:{
                CSRF_token
            },
            success:function (data) {
                console.log(data)
                $("#try").html(data)    
            }
        }
        )
    }
</script> -->
@endsection



