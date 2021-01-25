@extends('index')
@section('page_content')
<div class="login-body">
    <div class="login-reg-form">
        <div class="login-container">
        <form class="form-signin" method="POST" action="{{ route('test222') }}">
        @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;color:#c4a265;"> Sign in</h1>
            <div class="social-log">
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
                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
            </div>
            <div class="signin-forgot"> 
                 <button type="submit" class="btn btn-success btn-block">
                                        <i class="fas fa-sign-in-alt"></i> {{ __('Sign in') }}</button>
               
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
                <div class="social-log">
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

                    
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name" required="" autofocus="">
                        @error('name')
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" required autofocus="">
                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password" required autofocus="">
                </div>
                <div class="signup-button">
                        <button class="btn btn-primary btn-block sign-up" type="submit"><i class="fas fa-user-plus"></i>  {{ __('Sign Up') }}</button>
                        
                </div><br>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
        </div>
    </div>
</div>
@endsection

