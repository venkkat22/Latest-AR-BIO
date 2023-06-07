@extends('layouts/admin-layout')

@section('space-work')

<h2 class="mb-4">Quiz</h2>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addExamModel">
    Add Exam
  </button><br><br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Quiz Name</th>
        <th scope="col">Chapter </th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Attempt</th>
        <th scope="col">Add Questions</th>
        <th scope="col">Show Questions</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @if(count($exams) > 0)
            @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->id }}</td>
                <td>{{ $exam->exam_name }}</td>
                <td>{{ $exam->subject[0]['subject'] }}</td>
                <td>{{ $exam->date }}</td>
                <td>{{ $exam->time }} Hours</td>
                <td>{{ $exam->attempt }} Time</td>
                <td>
                  <a href="#" class="addQuestion" data-id="{{ $exam->id }}" data-toggle="modal" data-target="#addQnaModel" >Add Questions</a>
                </td>
                <td>
                  <a href="#" class="seeQuestions" data-id="{{ $exam->id }}" data-toggle="modal" data-target="#seeQnaModel" >See Questions</a>
                </td>
                <td>
                    <button class="btn btn-info editButton" data-id="{{ $exam->id }}" data-toggle="modal" data-target="#editExamModel">Edit</button>
                </td>
                <td>
                    <button class="btn btn-danger deleteButton" data-id="{{ $exam->id }}" data-toggle="modal" data-target="#deleteExamModel">Delete</button>
                </td>

            </tr>

            @endforeach
        @else
        <tr>
            <td colspan="5">Quiz not Found!</td>
        </tr>
        @endif

    </tbody>

  </table>

  <!-- Add  Exam Modal -->
  <div class="modal fade" id="addExamModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Quiz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="addExam">
            @csrf

            <div class="modal-body">
                
                <input type="text" name="exam_name" placeholder="Enter the Exam Name" class="w-100" required>
                <br><br> 
                <select name="subject_id" required class="w-100">
                    <option value="">Select Subject </option>
                    @if(is_countable($subject) && count($subject) > 0)
                        @foreach($subject as $subject)
                           <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                        @endforeach
                    @endif
                </select>
                <br><br>
                <input type="date" name="date"  class="w-100" required min="@php echo date('Y-m-d'); @endphp">
                <br><br>
                <input type="time" name="time"  class="w-100" required>
                <br><br>
                <input type="number" min="1" name="attempt" placeholder="Enter Exam Attempt Time" class="w-100" required>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Quiz</button>
            </div>
        </form>

      </div>
    </div>
  </div>


  <!-- Edit  Exam Modal -->
  <div class="modal fade" id="editExamModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Quiz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="editExam">
            @csrf

            <div class="modal-body">
                <input type="hidden" name="exam_id" id="exam_id">

                
                <input type="text" name="exam_name" id="exam_name" placeholder="Enter the Exam Name" class="w-100" required>
                <br><br>  
                
                    
                    <select name="subject_id" id="subject_id"  class="w-100" required>
                        <option value="">Select Subject</option>
                        @if(is_countable($subject) && count($subject) > 0)
                        @foreach($subject as $subject)
                           <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                        @endforeach
                        @endif
                    </select>
                    
                    
                <br><br>
                <input type="date" name="date" id="date"  class="w-100" required min="@php echo date('Y-m-d'); @endphp">
                <br><br>
                <input type="time" name="time" id="time" class="w-100" required>
                <br><br>
                <input type="number" name="attempt" id="attempt" class="w-100" required>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

      </div>
    </div>
  </div>

  <!--Delete Exam Modal -->
  <div class="modal fade" id="deleteExamModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Quiz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="deleteExam">
            @csrf

            <div class="modal-body">
                <input type="hidden" name="exam_id" id="deleteExamId">
                 <p>Are you sure u want to delete this Quiz?</P>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>

      </div>
    </div>
  </div>

 <!-- Add question Modal -->
 <div class="modal fade" id="addQnaModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Q&A</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="addQna">
          @csrf

          <div class="modal-body">
            <input type="hidden" name="exam_id" id="addExamId">
            <input type="search" name="search" class="w-100" placeholder="Search here">
            <br><br>
            <table class="table">
              <thead>
                <th>Select</th>
                <th>Question</th>
              </thead>
              <tbody class="addBody"></tbody>
              
            </table>


          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Q&A</button>
          </div>
      </form>

    </div>
  </div>
</div>


<!-- See question Modal -->
<div class="modal fade" id="seeQnaModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Questions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

          <div class="modal-body">
            <table class="table">
              <thead>
                <th>S.No</th>
                <th>Question</th>
                <th>Delete</th>
                
              </thead>
              <tbody class="seeQuestionTable"></tbody>
              
            </table>


          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </form>

    </div>
  </div>
</div>


  <script>
    $(document).ready(function(){
        $("#addExam").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({ 
                url:"{{ route('addExam') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success == true){

                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                    
                }

             });
        });

        $(".editButton").click(function(){
            var id = $(this).attr('data-id');
            $("#exam_id").val(id);

            var url = '{{ route("getExamDetail","id") }}';
            url = url.replace('id',id);

            $.ajax({
                url:url,
                type:"GET",
                success:function(data){
                    if(data.success == true){
                        var exam = data.data;
                        console.log(exam);
                        // console.log("Subject ID:", exam[0].subject_id);
                        $("#exam_name").val(exam[0].exam_name);
                        $("#subject_id").val(exam[0].subject_id);
                        $("#date").val(exam[0].date);
                        $("#time").val(exam[0].time);
                        $("#attempt").val(exam[0].attempt);

                    }
                    else{

                        alert(data.msg);
                    }
                    
                }
            }); 
        });

        $("#editExam").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({ 
                url:"{{ route('updateExam') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success == true){

                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                    
                }

             });
        });

        //delete exam

        $(".deleteButton").click(function(){
            var id = $(this).attr('data-id');
            $("#deleteExamId").val(id);
        });

        $("#deleteExam").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({ 
                url:"{{ route('deleteExam') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success == true){

                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                    
                }

             });
        });

        //add question part
        $('.addQuestion').click(function(){
          var id = $(this).attr('data-id');
          $('#addExamId').val(id);

          $.ajax({
            url:"{{ route('getQuestions') }}",
            type:"GET",
            data:{exam_id:id},
            success:function(data){
              if(data.success == true){

                var questions = data.data;
                var html = '';
                if(questions.length > 0){
                  for(let i = 0; i < questions.length; i++) {
                    html +=`
                    <tr>
                      <td><input type="checkbox" value="`+questions[i]['id']+`" name="questions_ids[]"></td>
                      <td>`+questions[i]['questions']+`</td>
                    </tr>
                    `;
                  }

                }
                else{
                  html +=`
                  <tr>
                    <td colspan="2">Questions not Available!</td>
                    </tr>`;

                } 

                $('.addBody').html(html);

              }
              else{
                alert(data.msg);
              }
            }
          })


        });

        $("#addQna").submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({ 
                url:"{{ route('addQuestions') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success == true){

                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                    
                }

             });
        });

        //See Questions
        $('.seeQuestions').click(function(){
          var id = $(this).attr('data-id');

          $.ajax({
            url:"{{ route('getExamQuestions') }}",
            type:"GET",
            data:{exam_id:id},
            success:function(data){
              //console.log(data);

              var html = '';
              var questions = data.data;
              if(questions.length > 0){

                for(let i =0; i < questions.length; i++){
                  html +=`
                  <tr>
                    <td>`+(i+1)+`</td>
                    <td>`+questions[i]['question'][0]['question']+`</td>
                    <td>
                      <button class="btn btn-danger deleteQuestion" data-id="`+questions[i]['id']+`">Delete</button>
                    </td>

                  </tr>
                    `;
                }

              }
              else{
                html+=`
                <tr>
                  <td colspan="1">Questions not Found!</td>
                </tr>
                `;
              }

              $('.seeQuestionTable').html(html);

            }
          });
        });

        //delete question
        $(document).on('click','.deleteQuestion',function(){

          var id = $(this).attr('data-id');
          var obj = $(this);
          $.ajax({

            url:"{{ route('deleteExamQuestions') }}",
            type:"GET",
            data:{id:id},
            success:function(data){
              if(data.success == true){
                obj.parent().parent().remove();



              }
              else{
                alert(data.msg);
              }
            }
          })

        });

        
    });
  </script>

@endsection