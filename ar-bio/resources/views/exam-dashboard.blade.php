@extends('layouts/exam-layout')

@section('space-work')



   
    <div class="title">
        
        <div class="inbt" style="background-color: rgb(0, 179, 255);">
            <h3 style>{{ $exam[0]['exam_name'] }}</h3>
        </div>
        
    </div>
    
    <div class="mybt">
    @php $qcount = 1; @endphp

    @if($success ==  true)

    @if(count($qna) > 0)
    <form action="{{  route('examSubmit') }}" method="POST" class="mb-5" onsubmit="return isValid()">
        @csrf
        
        <input type="hidden" name="exam_id" value="{{ $exam[0]['id'] }}">
        @foreach($qna as $data)
        <div>
            <h2>Q{{ $qcount++ }}. {{ $data['question'][0]['question']}}</h2><br>
            <input type="hidden" name="q[]" value="{{ $data['question'][0]['id'] }}">

            <input type="hidden" name="ans_{{ $qcount-1 }}" id="ans_{{ $qcount-1 }}">

            @php $acount = 1; @endphp
                @foreach($data['question'][0]['answers'] as $answer)
                    <p><b>{{ $acount++ }}).</b>{{ $answer['answer'] }}
                       <input type="radio" name="radio_{{ $qcount-1 }}" data-id="{{ $qcount-1 }}" class="select_ans" value="{{ $answer['id'] }}">
                   <br><br></p>
            @endforeach
        </div>
            <br>
        @endforeach
        <div class="text-center">
            <input type="submit" class="input">
        </div>
    </form>
    @else
    <h3 style="color:red;" class="text-center">Questions & Answers not available!</h3>
    @endif


    @else

    <h3 style="color:red" class="text-center" >{{ $msg }}</h3>

    @endif
</div>



<script>

    $(document).ready(function(){

        $('.select_ans').click(function(){
            var no = $(this).attr('data-id');
            $('#ans_'+no).val($(this).val());
        });

        
    });

    function isValid(){
        var result = true;

        var qlength = parseInt("{{ $qcount }}")-1;
        //$('.error_msg').remove();

        for(let i = 1; i <= qlength; i++){
            if($('#ans_'+i).val() == ""){
                result = false;
                $('#ans_'+i).parent().append('<span style="color:red;" class="error_msg">Please select answer.</span>');
                setTimeout(() => {
                    $('.error_msg').remove();
                }, 5000);

            }
        }
        
        return result;
        }
</script>





@endsection