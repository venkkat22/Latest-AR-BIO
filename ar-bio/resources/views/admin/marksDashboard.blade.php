@extends('layouts/admin-layout')

    
    @section('space-work')

    <h2 class="mb-4">Quiz</h2>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Quiz Name</th>
        <th scope="col">Marks/Q</th>
        <th scope="col">Total Marks</th>
        <th scope="col">Edit</th>

      </tr>
    </thead>
    <tbody>

      @if(count($exams) > 0)
      @php $x = 1; @endphp
        @foreach($exams as $exam)
        <tr>
          <td>{{ $x++ }}</td>
          <td>{{ $exam->exam_name }}</td>
          <td>{{ $exam->marks }}</td>
          <td>{{ count($exam->getQnaExam) * $exam->marks }}</td>
          <td>
            <button class="btn btn-primary editMarks" data-id="{{ $exam->id }}" data-marks="{{ $exam->marks }}" data-totalq="{{ count($exam->getQnaExam) }}" data-toggle="modal" data-target="#editMarksModel">Edit</button>
          </td>



        </tr>
        @endforeach

      @else
      <tr>
        <td colspan="5"> Quiz not added! </td>
      </tr>

      @endif
      
        
        
        
    </tbody>
  </table>



  <!-- marks   Modal -->
  <div class="modal fade" id="editMarksModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Quiz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="editMarks">
            @csrf

            <div class="modal-body">

              <div class="row">
                <div class="col-sm-3">
                  <label>Marks/Question</label>
                </div>
                <div class="col-sm-6">
                  <input type="hidden" name="exam_id" id="exam_id">
                  <input type="text" 
                    onkeypress="return event.charCode >=48 && event.charCode<=57 || event.charCode== 46"
                  name="marks" placeholder="Enter Marks per Question" id="marks" required>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <label>Total Marks</label>
                </div>
                <div class="col-sm-6">
                  <input type="hidden" name="exam_id" id="exam_id">
                  <input type="text" disabled name="tmarks" placeholder="Total Marks" id="tmarks">
                </div>
              </div>

            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Marks</button>
            </div>
        </form>

      </div>
    </div>
  </div>

  
 
<script>
$(document).ready(function(){
  var totalQna = 0;
  $('.editMarks').click(function(){

    var exam_id = $(this).attr('data-id');
    var marks = $(this).attr('data-marks');
    var totalq = $(this).attr('data-totalq');

    $('#marks').val(marks);
    $('#exam_id').val(exam_id);

    $('#tmarks').val((marks*totalq).toFixed(1));

    totalQna = totalq;


  });

  $('#marks').keyup(function(){

    $('#tmarks').val( ($(this).val()*totalQna).toFixed(1) );

  });

  $('#editMarks').submit(function(event){
    event.preventDefault();

    var formData = $(this).serialize();

    $.ajax({
      url:"{{ route('updateMarks') }}",
      type:"POST",
      data:formData,
      success:function(data){
        if(data.success ==  true){
          location.reload();

        }
        else{
          alert(data.msg);
        }

      }
    });
  });

});
</script>
 

@endsection

    
