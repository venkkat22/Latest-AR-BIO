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
			Chapter 6: Sexual Reproduction in Flowering Plants
	</div>

<!-- COURSES AVAILABLE -->
	{{-- <div class="ccard">--}}
		<center>
			{{-- <div class="ccardbox"> --}}
				<div class="inbt" style="background-color: yellow;">
					<h3 style>6.1 Structure of a Flower</h3>
			</div>
			<div class="mybt">
            <h3>We will learn about structure of a flower,development of pollen grains and embryo sac,pollination and fertilisation,developement of seeds and fruit and importance of seed for survival</h3>
			</div>	
		
				
				<table class="table table-striped" margin=" 0 auto;"">
					<thead>
					  <tr>
						
						<th scope="col">Male structure	 </th>
						<th scope="col"></th>
						<th scope="col">Female structure</th>
					</thead>
					<tbody>
					  
						
						<tr>
							
							<td>Consists of anther and filament	 </td>
							<td>Structure</td>
							<td>Consists of stigma,style and ovary</tr>
						<tr>
							<td>Produces pollen grains	</td>
							<td>Function</td>
							<td>Receives pollen grains and produces ovule</td></tr>
							<tr>
							<td>Male gamates are formed in pollen grains</td>
							<td>Formation of gametes</td>
							<td>Female gametes are formed in ovule</td>
							</tr>
					</tbody>
				  </table>
				  <br><br>
				  <div class="inbt" style="background-color: rgb(255, 132, 0);">
					<h3 style>6.2 Development of Pollen Grains and Embryo Sac</h3>
				  </div>
				  <div class="mybt">
					<h3>Process of pollen grains formation :</h3>
					<br>
					<h4>
						1. An anther has four pollen sacs in which pollen grains will be produced in the pollen sacs<br>
						2. Each pollen sac contains many diploid (2n)<br>
						3. Each pollen mother cells (2n) undergoes meiosis to produce a tetrad which containing four haploid microspore (n)<br>
						4. The haploid cells in tetrad seperate to form pollen grains<br>
						5. Each haploid cell underdoes mitosis to form a generative nucleus (n) and a tube nucleus (n)<br><br>
					
						
				</h4>
					<br><br>
					<h3>Process of embryo sac formation :</h3>					<br>
					<h4>1. Ovule is formed in the ovum.<br>
						2. Each ovule contains one embryo sac (2n)<br>
						3. The embryo sac mother cells (2n) undergoes mitosis to form four haploid megaspore cells (n)<br>
						4. Three megaspores degenerated and remaining one<br>
						5. The remaining megaspore undergoes mitosis three times to form haploid embryo sac cells with eight nuclei<br>
						 
						- Three cells move to one and near to micropyle, forming two synergid cells and one egg cell<br>
						- Three more cells move to another end to form three antipodal cells<br>
						- One cell with two nuclei located at the center to form polar nuclei<br>
						- The structure formed is known as embryo sac which is protected by integument<br>
					</h4>
	
				
				</div>
				  
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
					<iframe src="https://www.youtube.com/embed/1o53XPbASyU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/RpynjADQ0Ss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/zorjoAYJujM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/U47eIf4qKy8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
