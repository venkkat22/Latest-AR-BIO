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
			Chapter 2: Structure and Leaf Function
	</div>

<!-- COURSES AVAILABLE -->
	{{-- <div class="ccard">--}}
	<center>
		{{-- <div class="ccardbox"> --}}
			<div class="inbt" style="background-color: yellow;">
				<h3 style>2. 1 Leaf Structure</h3>
		</div>
			<h3></h3>
			
			<table class="table table-striped" margin=" 0 auto;"">
				<thead>
				  <tr>
					
					<th scope="col">Structure of leaf </th>
					<th scope="col">Function
					</th>
					
				</thead>
				<tbody>
				  
					
					<tr>
						
						<td>Epidermis</td>
						<td><li>A transparent layer allows sunlight penetration into leaf</li>
							<li>Secretes cuticle to reduce water loss from leaf</li>
							<li>Protects leaf tissues from injury and entry of pathogens</li></td>
					</tr>
					<tr>
						<td>Palisade mesophyll</td>
						<td><li>Cylindrical shaped of cells which contain chloroplasts</li>
							<li>Can carry out photosynthesis</li>
							<li>Closely arrangement of palisade mesophyll cells to absorb sunlight maximally for photosynthesis</li></td>
						</tr>
						<tr>
						<td>Spongy mesophyll</td>
						<td><li>Irregular shaped of cells which contain chloroplasts</li>
							<li>Can carry out photosynthesis</li>
								<li>Loosely arrangement of spongy mesophyll cells to form air spaces for carbon dioxide and water evaporation</li></td>
						</tr>
						<tr>
						<td>Xylem</td>
						<td><li>Transport water and mineral salts from roots to leaf</li></td>
						</tr>
						<tr>
						<td>Phloem</td>
						<td><li>Transport organic products from leaves to other parts of plants</li></td>
						</tr>
						<tr>
						<td>Vascular bundle							</td>
						<td><li>Component of vascular tissue in plants consisting both phloem and xylem</li>
						</td>
					</tr>
					<tr>

						<td>Guard cell</td>
						<td><li>Kidney shaped cells on leaf epidermis</li>
							<li>Two guard cells join at both cellll ends to form a stoma</li>
								<li>Control opening and closing of stomata for gaseous exchange and transpiration</li></td>
					</tr>
					
				</tbody>
			  </table>
			  <br><br>
			
		{{-- </div> --}}
		{{-- <div class="ccardbox"> --}}
			<div class="inbt" style="background-color: orange;">
				<h3 style>2. 2 Main Organ of Gaseous Exchange</h3>
		</div>
		<div class="mybt">
			<h4><b>
		Like other organisms, plants require oxygen gases to perform cellular respiration
        In addition, plants also require carbon dioxide gas to perform photosynthesis
        Hence, gases exchange is the most necessary for plants and this can be occurred with the presence of:
	    
	</b></h4>
		<br>
		<h4>
			<li>Stoma on the leaf</li>
			<li>Lanty cell on the mature stem and root</li>
		</b></h4>

		<h4><b>
			<li>Stoma is an opening formed by two guard cells on the leaf epidermis
			</li>
			<li>Leaf is the main organ of plants in oxygen and carbon dioxide exchange with environment
			</li>
			<li>Hence,leaf has large total surface area and can has more stomata for the purpose of gaseous exchange.
			</li>
		</b></h4>
		<br><br>

		<h3>Adaptation of guard cells for stoma opening :</h3>
		<br><br>
		<h4><b>
			<li>The inner cell wall is thick than the outer cell wall and kidney shaped
			</li>
			<li>Both guard cells joined at cell ends
			</li>
			<li>When water diffuses into guard cells by osmosis,the cells become turgid and bend outwards.Stoma opened
			</li>
			<li>When water diffuses out of the guard cells by osmosis,the cells flaccid. The stoma closed</li>


		</b></h4>
	</div>

		<table class="table table-striped" >
			<thead>
			  <tr>
				
				<th scope="col">Approaching dusk </th>
				<th scope="col">Approaching dawn
				</th>
				
			</thead>
			<tbody>
			  
				
				<tr>
					
					<td>Guard cells are sensitive toward the blue light
					</td>
					<td>Light intensity is low.Photosynthesis does not occur in the guard cells
					</td>
				</tr>
				<tr>
					<td>In the daylight, the blue loght stimulates uptake of potassium ions from epidermis cells into the guard cells</td>
				 <td>The concentration of sucrose decline as approaching dusk.Potassium ion move out from the guard cells via osmosis cause the guard cells to flaccid.The stomata closed
				</td>	
				</tr>
					<tr>
					<td>This increses concentration of potassium ion in the guard cells, then water diffuses from the epidermis cells into the guard cells by osmosis</td>
				<td>Protects leaf tissues from injury and entry of pathogens</td>	
				</tr>
					<tr>
					<td>The guard cells become turgid and stoma opens</td>
					</tr>
					<tr>
					<td>After the afternoon,the rate of potassium ions uptake begins to decline but the high concentration of sucrose in the guard cells maintain the opening of stomata</td>
					</tr>
					
				
				
			</tbody>
		  </table>
		  <br><br>



			
			
		{{-- </div> --}}
		{{-- <table class="table table-striped">
				<thead>
				  <tr>
					
					<th scope="col">Fields</th>
					<th scope="col">Explainations
					</th>
					
				</thead>
				@if(is_countable($reading) && count($reading) > 0)
				@foreach($reading as $item)
					@if(is_object($item) && property_exists($item, 'chapter') && $item->chapter == 2)
						<tr>
							<td>{{ $item->reading_title }}</td>
							<td>{{ $item->reading }}</td>
						</tr>
					@endif
				@endforeach
			@endif
			  </table> --}}
			  <br><br>
		<div>
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
			<div class="dcard2"><span class="tag" >1/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/blns1E-XC3k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/cnpNVkUvvak" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/eYLnKxJMd3o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/YuPfNTyJJLY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="dcard2"><span class="tag" >5/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/9fKwB4IVgdg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >6/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/A5eTDtZuxAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >7/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/BJl6lS5pX00" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			
			
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
