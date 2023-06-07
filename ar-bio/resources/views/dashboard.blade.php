<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>


    <div>

    <h2>Exams</h2>

    <table class ="table">
        <thead>
            <th>#</th>
            <th>Exam Name</th>
            <th>Subject Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Total Attempt</th>
            <th>available Attempt</th>
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
                        <td>{{ $exam->date }}</td>
                        <td>{{ $exam->time }}Hours</td>
                        <td>{{ $exam->attempt }}Time</td>
                        <td></td>
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

<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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

    



</x-app-layout>




