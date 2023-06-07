@extends('layouts/submit-layout')

@section('space-work')

<!-- MAIN Heading of Page -->
<div class="title" id="title">
    <h2>CONGRATULATIONS ON SUBMITTING THE QUIZ!</h2>
    <div class="shortdesc"><br>
        <div class="inbt" style="background-color: rgb(0, 255, 157);">
            <h3 style>You Scored A Total Of 60 %</h3>
    </div>
    </div>
    
</div>

    {{-- <div clas="container">
        <div class="text-center">
            <h2>Thanks for submitting your Quiz, {{ Auth::user()->name }}</h2>
            <p>We will review your Quiz</p>
            <a href="/subjects/quiz" class="btn-btn info">Go Back</a>
        </div>
    </div> --}}



@endsection