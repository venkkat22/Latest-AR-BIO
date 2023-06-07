@include('navbar')

    <div class="container">
<br/>
@extends('learning_content.layout')
@section('content')
<div class="card">
  <div class="card-header">Education Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">chp_content  : {{ $learning_content->chp_content }}</h5>
        <p class="card-text">content_text : {{ $learning_content->content_text }}</p>
        <p class="card-text">content_vid : {{ $learning_content->content_vid }}</p>
        

  </div>
      
    </hr>
  
  </div>
</div>