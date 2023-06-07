@include('navbar')

    <div class="container">
<br/>
@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Birthday</label></br>
        <input type="text" name="birthday" id="birthday" class="form-control"></br>

        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>

        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop