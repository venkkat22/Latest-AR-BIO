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
	Chapter 8: Biodiversity
</div>

<!-- COURSES AVAILABLE -->
{{-- <div class="ccard">--}}
<center>
{{-- <div class="ccardbox"> --}}
	<div class="inbt" style="background-color: yellow;">
		<h3 style>8.1 Classificaction System and Naming of Organisms</h3>
</div>
<div class="mybt">
	
	1. The Earth inhibited by millions organisms of different species.Many organisms are not found yet and identified their species
		<br>2. Local name for an organism is not the same based on the regions and countries
		<br>3. Hence,a scientific method of classification and nomenclature is required to ease research and communication as well as for reference at international level
		<br>4. In the current classification system,all identified organisms are classified into six Kingdom
</div>
	
	<table class="table table-striped" margin=" 0 auto;"">
		<thead>
		  <tr>
			
			<th scope="col">Kingdom </th>
			<th scope="col">Examples and main features according to the kingdom
			</th>
			
		</thead>
		<tbody>
		  
			
			<tr>
				
				<td>Archaebacteria
				</td>
				<td><li>Examples: methanogens, halophiles, thermophiles</li>
					<li>Unicellular organisms</li>
						<li>Do not have a nucleus and membrane-enclosed organelles</li>
							<li>Live in various habitats and extreme habitats such as anaerobic, high salt concentration and high-temperature environments</li>
								<li>Carry out anaerobic respiration</li>
									<li>Do not sensitive to antibiotic</li>
					<li>Carry out asexual reproduction such as binary fission and budding</li></td>
			</tr>
			<tr>
				<td>Eubacteria 
				</td>
				<td>
					<li>Examples of bacteria such as Escherichia coli, Streptococcus sp., Lactobacillus sp. and others</li>
					<li>Unicellular organisms</li>
						<li>Do not have a nucleus and membrane-enclosed organelles</li>
							<li>Have cell wall</li>
								<li>Divided into gram-positive and gram-negative</li>
									<li>Can carry out aerobic respiration, anaerobic respiration and fermentation</li>
										<li>Sensitive to antibiotic</li>
											<li>Certain bacteria can carry out photosynthesis</li>
						<li>Carry out sexual reproduction and asexual reproduction such as binary fission and formation of spores</li>
				</td>
				</tr>
				<tr>
				<td>
					Protista</td>
				<td><li>Examples: Ameoba sp., Paramecium sp., Euglena sp., Sprigyra sp., Chlamydomonas sp. and others</li>
					<li>Unicellular organisms, colony and multicellular organisms</li>
						<li>Have nucleus and membranous organelles</li>
							<li>Lives in aquatic habitats</li>
								<li>Divided into algae and protozoa</li>
					<li>Carry out aerobic respiration</li>
						<li>Only algae can carry out photosynthesis</li>
					<li>	Carry out sexual reproduction by conjugation and asexual reproduction such as binary fission and budding</li></td>
				</tr>
				<tr>
				<td>Fungi 
				</td>
				<td><li>Examples: fungi, yeast, mushrooms and others</li>
					<li>Unicellular organisms and multicellular organisms</li>
						<li>Have nucleus and membranous organelles</li>
							<li>Live in various habitat</li>
								<li>Carry out aerobic respiration and fermentation</li>
									<li>Do not carry out photosynthesis</li>
										<li>As saprophytes or parasites</li>
											<li>Carry out sexual reproduction by conjugation and asexual reproduction such as budding and formation of spores</li></td>
				</tr>
				<tr>
					<td>Plantae 
					</td>
					<td><li>Examples: ferns, pine trees, monocotyledonous plants, eudicot and others</li>
						<li>Multicellular organisms</li>
							<li>Have nucleus and membrane organelles</li>
								<li>Live in various habitats</li>
									<li>Carry out aerobic respiration and fermentation</li>
										<li>Can carry out photosynthesis</li>
											<li>Carry out sexual reproduction and asexual reproduction such as vegetative growth</li></td>
					</tr>
					<tr>
						<td>Animalia  
						</td>
						<td><li>Examples: corals, jellyfish, worms, starfish, spiders, insects, fish, reptiles, birds, mammals and others</li>
							<li>Multicellular organisms</li>
								<li>Have nucleus and membrane organelles</li>
									<li>Live in various habitats </li>
										<li>Carry out aerobic respiration</li>
											<li>Can carry out fermentation for certain tissues</li>
												<li>	Do not carry out photosynthesis</li>
													<li>Carry out sexual reproduction</li>
														<li>	Some organisms can carry out asexual reproduction such as budding, regeneration, fragmentation and parthenogenesis</li></td>
						</tr>
		</tbody>
	  </table>
	  <br><br>
	  <div class="mybt">
		<h3>The hierarchy classification system is used to classify organisms into seven main groups based on levels :</h3><br>
	  <b>1. Kingdom :</b> The largest group which containing all the organisms in a particular Kingdom
		<br><b>2. Phylum :</b> The second large group which containing some of the organisms from a particular Kingdom.Organisms in the same phylum share the common characteristics
		<br><b>3. Class
		<br>4. Order
		<br>5. Family
		<br>6. Genus </b>
		<br><b>7. Species :</b> The most specific hierarchy of classification
	</div>

	
	  <div class="mybt">
		<h3>Linnaecus Binomial System :</h3><br>
	  <li>Scientific method</li>
	  <li>In italics or underlined separately</li>
	</div>
	
	  <div class="mybt">
		<h3>Two Latin names :</h3><br>
	  <li>The first name is genus and starts with a capital letter</li>
		<li>The name given is based on genetic relation</li>
		<li>The second name is species and starts with a small letter</li>
	  <li>The name given is based on scientist name ,place of discovery and characteristics</li>
	</div>

	
	  <div class="mybt">
		<h3>Methods used to construct a dichotomous key :</h3><br>
	  <li>Determine a particular characteristics which can classify a group of organisms into two categories</li>
	  <li>Divide the organisms of the same category into another two categories until each organism is identified</li>
	  <li>The number of steps required to classify organisms is the number of organisms (m) required to be identified minus one, that is m-1</li>
	
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
					<iframe src="https://www.youtube.com/embed/HcvwIKdujPI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >2/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/84KkmwsS_qA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >3/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/U-NSU9lw0g0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >4/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/QiwQ2TRXcM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		
			<div class="dcard2"><span class="tag" >5/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/gd4F0r3irXY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >6/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/CYtNz8byigs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="dcard2"><span class="tag" >7/8</span>
				<div class="fpart2"><img src="https://www.fastweb.com/uploads/article_photo/photo/2038878/scholarships-for-biology-majors.jpeg">
					<iframe src="https://www.youtube.com/embed/d5-Zryuq9Ns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</center>

<br><br>
	<div class="click-me">
		<a href="https://www.youtube.com/playlist?list=PLEbGs_fk3O9DfuWBr3xZESg3Fo5FIBbqO" target="_blank">Click Here to Watch full playlist</a>
	</div>


@endsection
