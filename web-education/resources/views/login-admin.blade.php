
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets-admin/img/favicon.png') }}') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/fonts/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin/style.css') }}">
    <!-- Modernize js -->
    <script  src="{{ asset('assets-admin/js/modernizr-3.6.0.min.js') }}"></script>
      {{--  font awesome  --}}
      <link href=" {{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="{{ asset('assets-admin/img/logo2.png') }}" alt="logo">
                </div>
                <form action="index.html" class="login-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" placeholder="Enter usrename" class="form-control">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" placeholder="Enter password" class="form-control">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </form>
                <div class="login-social">
                    <p>or sign in with</p>
                    <ul>
                        <li><a href="#" class="bg-fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="sign-up">Dont have an account ? <a href="#">Signup now!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script  src="{{ asset('assets-admin/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script  src="{{ asset('assets-admin/js/plugins.js') }}"></script>
    <!-- Popper js -->
    <script  src="{{ asset('assets-admin/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script  src="{{ asset('assets-admin/js/bootstrap.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script  src="{{ asset('assets-admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Custom Js -->
    <script  src="{{ asset('assets-admin/js/main.js') }}"></script>

</body>

</html>
