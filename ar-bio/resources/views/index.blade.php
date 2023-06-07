

@extends('layouts/index-layout')

@section('space-work')



<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Chapters on AR-BIO</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="{{ asset('subjects/form5')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 1
			<span class="tooltip">Chapter 1:</span></a>
		</div>
		<div class="det"><a href="{{ asset('subjects/form5chp3')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 3
			<span class="tooltip">Chapter 3: The Main Inorganic Nutrients</span></a></div>
		<div class="det"><a href="{{ asset('subjects/form5chp4')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 4
			<span class="tooltip">Chapter 4: Transportation in Plants</span></a></div>
		<div class="det"><a href="s{{ asset('subjects/form5chp7')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 7
			<span class="tooltip">Chapter 7: Adaptations of Plants</span></a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="{{ asset('subjects/form5chp8')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 8
			<span class="tooltip">Chapter 8: Biodiversity</span>s</a></div>
		<div class="det"><a href="{{ asset('subjects/form5chp9')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 9
			<span class="tooltip">Chapter 9: Ecosystem</span></a></div>
		<div class="det"><a href="{{ asset('subjects/form5chop11')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 11
			<span class="tooltip">Chapter 11: Inheritance</span></a></div>
		<div class="det det-last"><a href="{{ asset('subjects/form5chp13')}}"><img src="{{ asset('assets/images/courses/book-icon.png') }}">Chapter 13
			<span class="tooltip">Chapter 13: Genetic Technology</span></a></div>
		</div>
	</div>

	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img src="{{ asset('assets/images/extra/index_about.jpg') }}">
				</div>
					<div class="side-image">
					<img src="{{ asset('assets/images/extra/index_about2.jpg') }}">
				</div>
				<div class="content">
					<h2>Everything about this website</h2>
					<p>We strive to provide a better learning flow and more preferably a more interactive learning process for students to stay engaged in their studies.
						We provide reading content , video content and quizzes alongside with some AR features to fulfil our students' desire.
						More AR content will be released as soon as possible! STAY TUNED!
					</p>
				</div>
		</div>
	</div>


<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Upcoming Informations</p></center>
		<div class="content">
			<p>
				“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every year</p>
		<div class="smbox">
		<span><center><div class="data">13</div><div class="det">Total Chapters</div></center></span>
		<span><center><div class="data">3</div><div class="det">Total Quizzes</div></center></span>
		<span><center><div class="data">5</div><div class="det">Total AR Features</div></center></span>
		</div>
	</div>




<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #4169e1, #6a1db8); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>




@endsection