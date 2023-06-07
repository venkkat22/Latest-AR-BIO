@extends('layouts/AR-layout')

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


	<div class="inbt1">
			Let's Get Started by Scanning the QR Code Below and Get Our App! 
	</div>

<!-- COURSES AVAILABLE -->
	{{-- <div class="ccard">--}}
	<center>
		{{-- <div class="ccardbox"> --}}
			<div class="inbt">
				<h3 style>Scan this QR code and download the AR Scanner to view our content!</h3>
                <img class="image" src="{{ asset('assets/images/extra/AR.png') }}" alt="svg">
		</div>
			

            <div class="inbt1">
				This is a <b>Plant Cell</b> based on Chapter 1. Having trouble imagining how a Plant Cell looks like?<br>
                Scan the image below and find out!
                <img class="image" src="{{ asset('assets/images/extra/PlantCell.jpg') }}" alt="svg">
		</div>

        <div class="inbt1">
            This is a <b>Neuron</b> which is a type nerve cells found in our Brain based on Chapter 3. Having trouble imagining how a Neuron looks like?<br>
            Scan the image below and find out!
           <img class="image" src="{{ asset('assets/images/extra/neuron.jpg') }}" alt="svg">
        </div>
        

        <div class="inbt1">
            This is a <b>Red Blood Cell</b> based on Chapter 5. Having trouble imagining how a Red Blood Cell looks like?<br>
            Scan the image below and find out!            
            <img class="image" src="{{ asset('assets/images/extra/rbc_pic.jpg') }}" alt="svg">
    </div>

    <div class="inbt1">
        This is a <b>DNA strand</b> based on Chapter 5. Having trouble imagining how a DNA strand looks like?<br>
        Scan the image below and find out! 
        <img class="image" src="{{ asset('assets/images/extra/DNA.jpg') }}" alt="svg">
</div>

<div class="inbt1">
    This is a type of bacteria called the <b>Bascillus</b> based on Chapter 11. Having trouble imagining how a Bascillus looks like?<br>
    Scan the image below and find out!
    <img class="image" src="{{ asset('assets/images/extra/bascillus_pic.jpg') }}" alt="svg">
</div>
		
	</center>
	</div>




@endsection
