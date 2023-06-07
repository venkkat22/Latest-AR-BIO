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
	Chapter 1 : Plant Tissue Organisation and Growth
</div>

<!-- COURSES AVAILABLE -->
{{-- <div class="ccard">--}}
<center>
{{-- <div class="ccardbox"> --}}
	<div class="inbt" style="background-color: yellow;">
		<h3 style>1.1 Organisation of Plant tissue</h3>
</div>
<div class="mybt">
	<h3><b>Plant tissue</b> </h3>
</div>
	<h3></h3>
	
	<table class="table table-striped" margin=" 0 auto;"">
		<thead>
		  <tr>
			
			<th scope="col">Meristematic tissue </th>
			<th scope="col">Permanent tissue</th>
			
		</thead>
		<tbody>
		  
			
			
			{{-- <tr>
				<td>
					@foreach($reading as $r)
						@if($r->chapter == 1)
							{{ $r->reading }}<br>
						@endif
					@endforeach
				</td>
				<td>
					@foreach($reading as $r)
						@if($r->chapter == 1.1)
							{{ $r->reading }}<br>
						@endif
					@endforeach
				</td>
			</tr> --}}

			<tr>
				<td>
					@foreach($reading as $r)
						@if($r->chapter == 1)
							{{ $r->reading }}<br>
						@endif
					@endforeach
				</td>
				<td>
					@foreach($reading as $r)
						@if($r->chapter == 1.1)
							{{ $r->reading }}<br>
						@endif
					@endforeach
				</td>
			</tr>
			
					
			 
				
			</tbody>
	  </table>
	  <br><br>
			
	
	
{{-- </div> --}}
{{-- <div class="ccardbox"> --}}
	
<div class="mybt">
	<h4><b><u>
    	1. Epidermal Tissues :
	</u></b> </h4>
<br>
@foreach($reading as $r)
						@if($r->chapter == 1.2)
							<li>{{ $r->reading }}</li><br>
						@endif
					@endforeach
</div>


<div class="mybt">
	<h4><b>
    	2. Ground Tissue :
	</b> </h4>

</div>

<div class="mybt">
	<h4><b><u>
    	a) Parenchyma Tissues :
	</u></b> </h4>
<br>
@foreach($reading as $r)
						@if($r->chapter == 1.3)
							<li>{{ $r->reading }}</li><br>
						@endif
					@endforeach
</div>

<div class="mybt">
	<h4><b><u>
    	b) Collenchyma Tissues :
	</u></b> </h4>
<br>
@foreach($reading as $r)
						@if($r->chapter == 1.4)
							<li>{{ $r->reading }}</li><br>
						@endif
					@endforeach
</div>

<div class="mybt">
	<h4><b><u>
    	c) Sclerenchyma Tissues :
	</u></b> </h4>
<br>
@foreach($reading as $r)
						@if($r->chapter == 1.5)
							<li>{{ $r->reading }}</li><br>
						@endif
					@endforeach
</div>

<div class="mybt">
	<h4><b>
    	3. Vascular Tissue :
	</b> </h4>

</div>

<div class="mybt">
	<h4><b><u>
    	a) Xylem :
	</u></b> </h4>
<br>
@foreach($reading as $r)
						@if($r->chapter == 1.6)
							<li>{{ $r->reading }}</li><br>
						@endif
					@endforeach
</div>

<div class="mybt">
	<h4><b><u>
    	b) Phloem :
	</u></b> </h4>
<br>
@foreach($reading as $r)
						@if($r->chapter == 1.7)
							<li>{{ $r->reading }}</li><br>
						@endif
					@endforeach
</div>



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
			<div class="dcard2"><span class="tag" >1/6</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/dLpVB-aiIn0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/6</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/JVhasqKDiGQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/6</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/zqzRKSfNbAY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/6</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/-rXZ-cVSlTI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="dcard2"><span class="tag" >5/6</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/5DjkrXx2pIw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >6/6</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/NGOJy94SVqs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
