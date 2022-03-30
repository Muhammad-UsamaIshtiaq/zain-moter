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
                    <form action="index.html">
                        <div class="log-form-fields mb-4">
                            <div class="login-form-icon">
                                <img src="{{asset('assets/images/email.svg')}}">
                            </div> 
                            <input type="email" class="form-control" id="" placeholder="name@example.com">
                        </div>
                        <div class="log-form-fields mb-4">
                            <div class="login-form-icon">
                                <img src="{{asset('assets/images/password.svg')}}">
                            </div>
                            <input type="password" class="form-control" id="" placeholder="Password">
                        </div>
                        <div class="remember-me mb-4">
                            <div class="checkbox-box"><input type="checkbox" id="remember-me"></div>
                            <label for="remember-me">Remeber Me</label>
                        </div>
                        <a href="{{url('/')}}" class="btn btn-primary btn-login btn-full">Sign In</a>
                    </form>
                </div>
            </div>
        </div>

<script src="{{asset('assets/js/jquery.3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


    </body>
</html>