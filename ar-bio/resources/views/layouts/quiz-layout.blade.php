
<head>
	<link rel="shortcut icon" type="png" href="{{ asset('assets/images/icon/favicon.png')}}">
	
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/subjects.css')}}">


      
	<script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/video.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
  {{-- <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/quizStyle.css')}}"> --}}
	<title>ARBIO QUIZZES</title>
	
   
	
</head>
<body>

	<!-- NAVIGATION -->
	<header>
		<div class="nav" id="nav">
			<div id="learned-logo">
			<a href="index"><img src="{{ asset('assets/images/icon/ar-bio-logo.png')}}" style="width: 120px;"></a></div>
			<div class="switch-tab" id="switch-tab" onclick="switchTAB()"><img src="{{ asset('assets/images/icon/menu.png')}}"></div>
			<ul id="list-switch">
				<li><a href="{{ asset('index-student')}}"><img src="{{ asset('assets/images/courses/home-icon.png')}}" class="icon">HOME</a></li>

				<li><a href="{{ asset('subjects/form5')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}" class="icon">FORM 5</a></li>
				<li><a href="{{ asset('subjects/quiz')}}"><img src="{{ asset('assets/images/courses/quiz-icon.png')}}" class="icon">QUIZ</a></li>
				<li><a href="{{ asset('subjects/AR')}}"><img src="{{ asset('assets/images/courses/AR-icon.png')}}" class="icon">AR</a></li>
				
				
			</ul>
			<div class="search" id="search-switch">
				<input type="text" placeholder="Search" class="srch"><button id="srchbtn"><img src="{{ asset('assets/images/icon/search.png')}}"></button>
			</div>
		</div>
	</header>
	<!-- MAIN Heading of Page -->
	<div class="title" id="title">
		<span>QUIZZES ON BIOLOGY</span>
		<div class="shortdesc"><br>
			<p>Try these quizzes to test your memory and knowledge!</p>
		</div>
		
	</div>
</div>

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

