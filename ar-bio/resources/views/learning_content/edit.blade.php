@include('navbar')

    <div class="container">
<br/>
@extends('learning_content.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('learning_content/' .$learning_content->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$learning_content->id}}" id="id" />
        <label>chp_content</label></br>
        <input type="text" name="chp_content" id="chp_content" value="{{$learning_content->chp_content}}" class="form-control"></br>
        <label>Year</label></br>
        <input type="text" name="content_text" id="content_text" value="{{$learning_content->content_text}}" class="form-control"></br>
        <label>content_vid</label></br>
        <input type="text" name="content_vid" id="content_vid" value="{{$learning_content->content_vid}}" class="form-control"></br>

      
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop