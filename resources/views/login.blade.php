<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<html>
    <body class="login-bg">
        <div class="transparent-bg"></div>

        <div class="login-container">
            <div class="inner-container">
                <div class="login-img"><img src="{{asset('assets/images/car.svg')}}"></div>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="log-form-fields mb-4">
                            <div class="login-form-icon">
                                <img src="{{asset('assets/images/email.svg')}}">
                            </div> 
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder="name@example.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="log-form-fields mb-4">
                            <div class="login-form-icon">
                                <img src="{{asset('assets/images/password.svg')}}">
                            </div>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="remember-me mb-4">
                            <div class="checkbox-box"><input type="checkbox" id="remember-me"></div>
                            <label for="remember-me">Remeber Me</label>
                        </div>
                        <button class="btn btn-primary btn-login btn-full">Sign In</button>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
                </div>
            </div>
        </div>

<script src="{{asset('assets/js/jquery.3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


    </body>
</html>