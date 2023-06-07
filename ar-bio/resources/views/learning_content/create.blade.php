@include('navbar')

    <div class="container">
<br/>
@extends('learning_content.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('learning_content') }}" method="post">
        {!! csrf_field() !!}
        <label>chp_content</label></br>
        <input type="text" name="chp_content" id="chp_content" class="form-control"></br>

        <label>content_text</label></br>
        <input type="text" name="content_text" id="content_text" class="form-control"></br>

        <label>content_vid</label></br>
        <input type="text" name="content_vid" id="content_vid" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop