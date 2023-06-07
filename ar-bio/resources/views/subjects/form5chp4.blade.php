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
			Chapter 4: Transportation in Plants
	</div>

<!-- COURSES AVAILABLE -->
	{{-- <div class="ccard">--}}
		<center>
			{{-- <div class="ccardbox"> --}}
				<div class="inbt" style="background-color: yellow;">
					<h3 style>4.1 Vascular Tissues</h3>
			</div>
			<div class="mybt">
				<h3>The necessity of transport in plants :</h3>
		        <br>
		        <h4>
				<li>Transport water and mineral salts to carry out photosynthesis and growth
				</li>
				<li>Transport photosynthetic products to other parts of plants
				</li>
				<li>Transport water for plant cell turgidity and for support
				</li>
				<li>Transports organic acids in plants
				</li>
				<li>Transport phytohormones in plants for response
				</li>
				
				<li>Transports water in plants for cooling
				</li>
			</h4>
				<br><br>
				<h3>Transport in plants is carried out by vascular tissues which consist of :</h3>
                <br>
				<h4><b>1. Xylem tissue : </b>transport water and mineral salts from roots to shoots</h4>
                <h4><b>2. Phloem tissue : </b>transport photosynthetic product and other organic substances from shoots to other parts</h4>
			    <br>
				<h4>The xylem tissue contains xylem vessel and tracheid as the main transport vessels,whereas the phloem tissue contains sieve tube and companion cell as the main transport vessels</h4>
			    <br><br>

				<h3>The simillarities between xylem tissue and phloem tissue :</h3>
		        <br><br>
				<h4><li>As vascular tissue</li></h4>
				<h4><li>Trasnport substance in plants
				</li></h4>
				<h4><li>Have parenchyma cell and fibres within the vascular tissue</li></h4>

			
			</div>
			<div class="mybt">
            <h3>The differences between xylem tissue and phloem tissue:</h3>
			</div>	
		
				
				<table class="table table-striped" margin=" 0 auto;"">
					<thead>
					  <tr>
						
						<th scope="col">Types </th>
						<th scope="col">Xylem Tissue

						</th>
						
					</thead>
					<tbody>
					  
						
						<tr>
							
							<td>Main cell type 	</td>
							<td>Xylem vessel & tracheid							</tr>
						<tr>
							<td>Lignified wall	</td>
							<td>Lignified in the form of annular, spiral, scalariform, reticular and pit</tr>
							<tr>
							<td>Condition of the cell after mature	
							</td>
							<td>Death cells and cell contents degenerated<br><br>
								Cells form a long and hollow vessel <br><br>
								Have plate or nnote for the flow of water & mineral <br><br>
								Have pits for the glow of water and minerals laterally

							</td>
							</tr>
							<tr>
							<td>Materials transported	</td>
							<td>	
								Synthesis of protein,Cofactors for enzymes </td>
							</tr>
							<tr>
							<td>Main function</td>
							<td>Transport water and mineral in plants<br><br>
								Provide mechanical support to plants
							</td>
							</tr>
					</tbody>
				  </table>
				  <br><br>
				  <table class="table table-striped" margin=" 0 auto;"">
					<thead>
					  <tr>
						
						<th scope="col">Types </th>
						<th scope="col">Phloem Tissue
						</th>
						
					</thead>
					<tbody>
					  
						
						<tr>
							
							<td>Main cell type 	</td>
							<td>Sieve elemetns & companion cell</tr>
						<tr>
							<td>Lignified wall	</td>
							<td>Unlignified</tr>
							<tr>
							<td>Condition of the cell after mature	
							</td>
							<td>Living vells with degenerated organelles<br><br>
								Cells form a  long tube filled with cytoplasm <br><br>
								Have sieve tubes for the flow of organic substance
							</td>
							</tr>
							<tr>
							<td>Materials transported	</td>
							<td>	
								Sucrose, amino acid, organic acid, phytohormones & water  </td>
							</tr>
							<tr>
							<td>Main function</td>
							<td>Transport sucrose and other organic substances
							</td>
							</tr>
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
			<div class="dcard2"><span class="tag" >1/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/gmJZkO4LTnA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/2PJtFJxTswU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/EnUWBF3Yjk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/4</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/KH1TtkMnnDM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		
			
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
