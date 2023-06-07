@extends('layouts/content-layout')

@section('space-work')

<style>
    td {
        padding: 5px; /* add 5px padding to all table cells */
    }
    th {
        padding: 10px; /* add 10px padding to all table header cells */
    }
    .column {
        padding-right: 20px; /* add 20px right padding to all cells in the "column" class */
    }
</style>

<div class="inbt">
	Chapter 5 : Response in Plants
</div>


<!-- COURSES AVAILABLE -->
{{-- <div class="ccard">--}}
	<center>
		{{-- <div class="ccardbox"> --}}
			<div class="inbt" style="background-color: yellow;">
				<h3 style>5.1 Types of Responses</h3>
		</div>

<div class="mybt">
<h3><b>Plant tissue</b> </h3>
</div>
<h3></h3>

<table class="table table-striped" margin=" 0 auto;"">
	<thead>
	  <tr>
		
		<th scope="col">Type </th>
		<th scope="col">Tropism</th>
		
	</thead>
	<tbody>
	  
		
		
		
		@php
			$type = '';
			$tropism = '';
		@endphp
		@foreach($reading as $r)
			@if($r->chapter == 5)
				@php
					$type = $r->reading;
				@endphp
			@elseif($r->chapter == 5.1)
				@php
					$tropism = $r->reading;
				@endphp
			@endif
			@if($type != '' && $tropism != '')
				<tr>
					<td>{{ $type }}</td>
					<td>{{ $tropism }}</td>
				</tr>
				@php
					$type = '';
					$tropism = '';
				@endphp
			@endif
		@endforeach
			
		
		
	</tbody>
  </table>
  <br><br>

  <table class="table table-striped" margin=" 0 auto;"">
	<thead>
	  <tr>
		
		<th scope="col">Type </th>
		<th scope="col">Nastic</th>
		
	</thead>
	<tbody>
	  
		
		
		
		@php
			$type = '';
			$nastic = '';
		@endphp
		@foreach($reading as $r)
			@if($r->chapter == 5.2)
				@php
					$type = $r->reading;
				@endphp
			@elseif($r->chapter == 5.3)
				@php
					$nastic = $r->reading;
				@endphp
			@endif
			@if($type != '' && $nastic != '')
				<tr>
					<td>{{ $type }}</td>
					<td>{{ $nastic }}</td>
				</tr>
				@php
					$type = '';
					$nastic = '';
				@endphp
			@endif
		@endforeach
			
		
		
	</tbody>
  </table>
  <br><br>
	</center>
	</div>

<!-- VIDEOS SECTION -->
	<div class="title2" id="organic">
		<span>Learning Videos</span>
		<div class="shortdesc2">
			<p>Tired of reading? Watch these videos instead!</p>
		</div>
	</div>
	
	<center>
		<div class="ccardbox2">
			<div class="dcard2"><span class="tag" >1/5</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/izVv43MACbY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/5</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/bJxO9kpXa_0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/5</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/Bg1hQOSyPIA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/5</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/mOLeJKzuFYA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="dcard2"><span class="tag" >5/5</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/yDsQmm9-z6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
