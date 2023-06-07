@extends('layouts/quiz-layout')

@section('space-work')

	<div class="content">

<!-- Courses Available -->
<div class="inbt">
	Accelerate your studies with these quizzes!
</div>

<div class="ccard">
<center>
	<div class="ccardbox">
		@if($exams && count($exams) > 0)
		@php $count =1; @endphp 
		@foreach($exams as $exam)		
		<div class="dcard">
			<div class="fpart"><img src="{{ asset('assets/images/courses/biology.jpg') }}"></div>
			<a href="http://127.0.0.1:8000/exam/{{ $exam->enterance_id }}"><div class="spart">{{ $exam->exam_name }} </div></a>
		</div>
		@endforeach
		@else
							<tr>
								<td colspan="8">No Exams Available!</td>
							</tr>
		@endif

		
	</div>
</center>
</div>
		
		{{-- <div class="title2" id="sample_papers">
			<span><h2>Exams</h2></span>
			<div class="shortdesc2">
				<table class ="table table-dark table-striped-columns">
					<thead>
						<th>#</th>
						<th>Exam Name</th>
						<th>Subject Name</th>
						
						<th>Copy Link</th>
					</thead>
					<tbody>
						@if($exams && count($exams) > 0)
							@php $count =1; @endphp 
							@foreach($exams as $exam)
								<tr>
									<td>{{ $count++ }}</td>
									<td>{{ $exam->exam_name }}</td>
									<td>{{ !empty($exam->subject) ? $exam->subject[0]['subject'] : '' }}</td>
									<td><a href="#" data-code="{{ $exam->enterance_id }}" class="copy"><i class="fa fa-copy"></i></a></td>
								</tr>
							@endforeach
						@else
							<tr>
								<td colspan="8">No Exams Available!</td>
							</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div> --}}
	
		
	</div>
	
	
	<script>
		$(document).ready(function(){
	
			$('.copy').click(function(){
				$(this).parent().prepend('<span class="copied_text">Copied</span>');
		
				var code = $(this).attr('data-code');
				var url = "{{URL::to('/')}}/exam/"+code;
				var $temp = $("<input>");
				$("body").append($temp);
				$temp.val(url).select();
				document.execCommand("copy");
				$temp.remove();
		
				setTimeout(() => {
					$('.copied_text').remove();
				}, 1000);
			});
		});
		
	</script>

	



	

@endsection