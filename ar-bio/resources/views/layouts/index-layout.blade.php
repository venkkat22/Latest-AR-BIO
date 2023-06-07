<head>
	<link rel="shortcut icon" type="png" href="{{ asset('assets/images/icon/favicon.png') }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>AR-BIO</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
	<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
   <!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="{{ asset('assets/images/icon/ar-bio-logo.png') }}" alt="logo"></div>
			<ul>
				<li><a class="active" href="{{ asset('index-student')}}">HOME</a></li>
				
				<li><a href="{{ asset('subjects/form5')}}">FORM 5 CHAPTERS</a></li>
				<li><a href="{{ asset('subjects/quiz')}}">QUIZ</a></li>
				<li><a href="{{ asset('subjects/AR')}}">AR</a></li>

				
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="{{ asset('assets/images/icon/search.png') }}" alt="search" onclick=slide()></div>
			<a class="get-started" href="{{ asset('subjects/form5')}}">Get Started</a>
			<img src="{{ asset('assets/images/icon/menu.png') }}" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>Learning is easier if its fun! Study without desire spoils the memory, and it retains nothing that it takes in!</p>
				<h5>AR-BIO caters to student's needs when it comes to learning effectively!</h5>
				<div class="play">
					<img src="{{ asset('assets/images/icon/play.png') }}" alt="play"><span><a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Watch Our Full Learning Videos!</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="{{ asset('assets/images/extra/indexpic.jpg') }}" alt="svg">
			</div>
		</div>
		{{-- <div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="{{ asset('assets/images/icon/close.png') }}" alt=""></div>
			<div class="user">
				<img src="{{ asset('assets/images/creator/roshan.jpeg') }}" alt="Username">
				<p>roshank9419</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div> --}}
	</header>

<div>

@yield('space-work')

</div>

</body>
<!-- FOOTER -->
<footer>
	<div class="footer-container">
		<div class="left-col">
			<img src="{{ asset('assets/images/icon/AR-BIO_colour.jpg')}}" style="width: 200px;">
			<div class="logo"></div>
			<div class="social-media">
				<a href="#"><img src="{{ asset('assets/images/icon\fb.png')}}"></a>
				<a href="#"><img src="{{ asset('assets/images/icon\insta.png')}}"></a>
				
			</div><br><br>
			<p class="rights-text">Copyright © 2023 AR-BIO </p>
			<br><p><img src="{{ asset('assets/images/icon/location.png')}}">149, Taman Camar <br>09000, Lorong Camar </p><br>
			<p><img src="{{ asset('assets/images/icon/phone.png')}}">016-6220151 <br><img src="{{ asset('assets/images/icon/mail.png')}}">&nbsp; Vsanjev16@gmail.com</p>
		</div>
		
	</div>
</footer>


