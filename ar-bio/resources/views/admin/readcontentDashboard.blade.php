@extends('layouts/admin-layout')

    
    @section('space-work')

    <h2 class="mb-4">Reading Material</h2>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addReadingModel">
    Add A Reading Material
  </button><br><br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Form</th>
        <th scope="col">Chapter</th>
        <th scope="col">Chapter</th>
        <th scope="col">Material</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      
        @if(count($reading ?? []) > 0 )

        @foreach($reading as $reading)
        <tr>
            <td>{{ $reading->id}}</td>
            <td>{{ $reading->form}}</td>
            <td>{{ $reading->chapter}}</td>
            <td>{{ $reading->reading_title }}</td>
            <td>{{ $reading->reading}}</td>
            <td>
                <button class="btn btn-info editButton" data-id="{{ $reading->id}}" data-title="{{ $reading->reading_title }}" data-reading="{{ $reading->reading}}" data-form="{{ $reading->form}}" data-chapter="{{ $reading->chapter}}" data-toggle="modal" data-target="#editReadingModel">Edit</button>
            </td>
            <td>
                <button class="btn btn-danger deleteButton" data-id="{{ $reading->id}}"  data-toggle="modal" data-target="#deleteReadingModel">Delete</button>
            </td>
        </tr>

        @endforeach
        
        @else
        
        <tr>
            <td colspan="4">Reading Material Not Found!</td>
      </tr>
      @endif
    </tbody>
  </table>


  
  <!-- Modal -->
  <div class="modal fade" id="addReadingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="addReading">
            @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Chapter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group text-center">
          <label><b>Form :</b></label>
          <input type="text" name="form" placeholder="Enter which Form" required><br><br>
          <label><b>Chapter :</b></label>
          <input type="text" name="chapter" placeholder="Enter which Chapter" required><br><br>
          <label><b>Reading Title :</b></label>
          <input type="text" name="reading_title" placeholder="Enter the Reading Material Title" required><br><br>
          <label><b>Reading Material :</b></label>
          <textarea name="reading" rows="10" cols="50" placeholder="Enter the Reading Material" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>
    </div>
  </div>

<!--Edit sub Modal -->
<div class="modal fade" id="editReadingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Reading</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="editReading">
            @csrf
                <div class="modal-body">
                  <center>
                <label>Form</label>
                <input type="text" name="form" placeholder="Enter which Form" id="edit_form" required><br><br>
                <label>Chapter</label>
                <input type="text" name="chapter" placeholder="Enter which Chapter" id="edit_chapter" required><br><br>
                <label>Reading Title</label>
                <input type="text" name="reading_title" placeholder="Enter the Reading Material title" id="edit_title" required><br><br>
                <label>Reading</label><br>
                <input type="text" name="reading" placeholder="Enter the Reading Name" id="edit_reading" style="width: 300px;height: 300px;" required>
                <input type="hidden" name="id" id="edit_reading_id" >
                  </center>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
            </div>
    
    </div>
  </div>


  <!--Delete sub Modal -->
<div class="modal fade" id="deleteReadingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Reading Material</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="deleteReading">
            @csrf
                <div class="modal-body">
                <p>Are you sure you want to delete this reading?</p>
                <input type="hidden" name="id" id="delete_reading_id">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
            </div>
    
    </div>
  </div>


  <script>
    $(document).ready(function(){

        $("#addReading").submit(function(e){

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('addReading') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success==true)
                    {
                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                }
            });
        });

        //edit reading
        $(".editButton").click(function(){
           var reading_id = $(this).attr('data-id');
           var form = $(this).attr('data-form');  // add this line
           var chapter = $(this).attr('data-chapter');  // add this line
           var reading_title = $(this).attr('data-title');
           var reading = $(this).attr('data-reading');

           $("#edit_form").val(form);  // add this line
           $("#edit_chapter").val(chapter);  // add this line
           $("#edit_reading").val(reading);
           $("#edit_title").val(reading_title);
           $("#edit_reading_id").val(reading_id);
        });

        $("#editReading").submit(function(e){

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('editReading') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success==true)
                    {
                        location.reload();
                    }
                    else{
                        alert(data.msg);
                    }
                }
            });
        });


        //delete reading 

        $(".deleteButton").click(function(){

            var reading_id = $(this).attr('data-id');

            $("#delete_reading_id").val(reading_id);
        });

        $("#deleteReading").submit(function(e){

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('deleteReading') }}",
                type:"POST",
                data:formData,
                success:function(data){
                    if(data.success==true)
                    {
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
