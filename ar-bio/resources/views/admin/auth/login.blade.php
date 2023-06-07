<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Panel | AR-BIO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('front/images/icons/arbio.jpg') }}"/>



<!--===============================================================================================-->



 <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">

</head>
<body>

	<div class="limiter">
<div class="container-login100" style="background-image: url('{{ asset('front/images/bg-02.jpg') }}');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('admin.login') }}">
				       @csrf
                       <div class="login100-form-1" style="background-image: url('{{ asset('front/images/icons/arbio.jpg') }}');">
                        <!-- You can add any content you want inside the div -->
                      </div>

					<span class="login100-form-title p-b-34 p-t-27">
						<h5>Admin Panel | Log in</h5>
					</span>

          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

          <!-- Validation Errors -->
          <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <br>
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100"  id="email"  type="email" name="email" required autofocus placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="password"
                type="password"
                name="password"
                required autocomplete="current-password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Log in') }}
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('front/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('front/vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('front/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('front/vendor/daterangepicker/daterangepicker.js') }}"></script>

<!--===============================================================================================-->
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('front/js/main.js') }}"></script>

</body>
</html>