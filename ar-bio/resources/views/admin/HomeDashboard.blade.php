@extends('layouts/admin-layout')

@section('space-work')

<h2 class="mb-4">Welcome back to the Admin Dashboard!</h2>
 <!-- ======= Counts Section ======= -->
 <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
                <center><h3>Number Of Chapters</h3></center>
              <center><img src="{{ asset('assets/images/courses/book-icon.png') }}" class="icon-image"></center>
              <center><h3>{{ \App\Models\Subject::count() }}</h3></center>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <center> <h3>Number of Reading Materials</h3></center>
              <center><img src="{{ asset('assets/images/courses/book-icon.png') }}" class="icon-image"></center>
              <center> <h3>{{ \App\Models\Reading::count() }}</h3></center>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <center> <h3>Number of Quiz</h3></center>
              <center><img src="{{ asset('assets/images/courses/quiz-icon.png') }}" class="icon-image"></center>
              <center> <h3>{{ \App\Models\Exam::count() }}</h3></center>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <center><h3>Number of Questions</h3></center>
              <center><img src="{{ asset('assets/images/courses/quiz-icon.png') }}" class="icon-image"></center>

              <center>  <h3>{{ \App\Models\Question::count() }}</h3></center>

            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->
        <!-- Button trigger modal -->

@endsection