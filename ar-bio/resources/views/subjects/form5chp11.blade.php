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
	Chapter 11: Inheritance
</div>

<!-- COURSES AVAILABLE -->
{{-- <div class="ccard">--}}
<center>
{{-- <div class="ccardbox"> --}}
	<div class="inbt" style="background-color: yellow;">
		<h3 style>11.1 Monohybrid Inheritance</h3>
</div>
<div class="mybt">
	<br>1. Worked with peas that have both female and male parts; stamens and carpels.
	<br><br>2. He cross-pollinated the pure-breeding pea plants by his own.
	<br><br>3. The fertilised gametes become seeds and the seeds are planted.
	<br><br>4. He selects the simple and distinguishable traits such as the colour of flowers, the stem length, seed shape, seed colour, colour of pods, pod shape and the position of flowers.
	<br><br>5. He found out that the first generation of offsprings carries the same trait as parents.
	<br><br>6. Become a stepping stone in the study of inheritance.
</div>
<div class="mybt">
	<h3>Terms related to inheritance :</h3><br>
</div>
	<table class="table table-striped" margin=" 0 auto;"">
		<thead>
		  <tr>
			
			<th scope="col">Terms </th>
			<th scope="col">Meaning
			</th>
			
		</thead>
		<tbody>
		  
			
			<tr>
				
				<td>Genes
				</td>
				<td>Occupy specific positions in chromosomes</td>
			</tr>
			<tr>
				<td>Alleles
				</td>
				<td>Alternate forms of the same gene occupying on the same positions on a certain pair of chromosomes</td>
				</tr>
				<tr>
				<td>
					Phenotype</td>
				<td>Observable/measurable character </td>
				</tr>
				<tr>
				<td>
					Genotype</td>
				<td>	
					Combination of alleles carried by the organism 	
				</td>
			</tr>
					<tr>
				<td>
					Dominant allele</td>
				<td>Manifested in the appearance of the phenotype 	
				</td>
			</tr>
			<tr>
				<td>
					Recessive allele</td>
				<td>Appears in the phenotype if it does not pair with the dominant allele	
				</td>
			</tr>
					<tr>
				<td>
					Homozygous</td>
				<td>Both alleles at a given pair of loci are the same<br>

					<b>Example:</b> homozygous dominant (TT) and homozygous recessive (tt) 	
				</td>
			</tr>
			<tr>
				<td>
					Heterozygous</td>
				<td>The alleles at a given pair of loci are the different<br>

					<b>Example:</b> heterozygous dominant (Tt)	
				</td>

				</tr>
				
		</tbody>
	  </table>
	  <br><br>
	  <div class="mybt">
		<h3>Monohybrid inheritance :</h3><br>
		1. Studies of a pair of contrasting traits of a character.
		<br><br>2. The original parents denote as P generation.
		<br><br>3. The result of the parental cross appeared as the F1 generation.
		<br><br>4. The plants of F1 generation allowed to cross-pollinate to produce the F2 generation.</div>

	<div class="mybt">
		<h3>Summary of Mendel monohybrid experiment :</h3><br>
	  <li>A characteristic of an organism is controlled by a pair of alleles and only one of the allelic pair is inherited in a gamete</li>
	</div>
	<div class="mybt">
		<h3>Factors causing the greenhouse effect and greenhouse gases involved:</h3><br>
	<li>A characteristic inherited from a parent to the next generation is determined by a genetic factor,which is known as gene</li> 
		<li>	A trait is controlled by a pair of genetic factor known as allele</li> 
			<li>	A pair of alleles segregates (separates) randomly during formation of gametes.Only one allele from the pair is found in a sigle gamete</li> 
				<li>	During fertillisation,a zygote formed possesses two alleles (one allele from ecah parenr) for a specific characteristics</li> 
					<li>	Fertilisation is random.Genotypic combination which is homozygous dominant shows dominant trait whereas ,homozygous reccesive shows reccesive trait.Heterozygous genotype (combination of one dominant allele and one reccesive allele) shows dominant trait.</li> 
	
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
					<iframe src="https://www.youtube.com/embed/sTLvT_LH-fo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/ItxnKLQU2cE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/_iqCvXomXPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/irt398B7u4I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="dcard2"><span class="tag" >5/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/W1HvE0CEmjg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >6/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/DyxPBuQTaVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >7/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/siXF9y1uLt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >8/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/qVNgZ42lrps" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >8/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/fspRXxvrKmI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
