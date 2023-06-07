@extends('layouts/admin-layout')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::guard('admin')->user()->name }} - ({{ Auth::guard('admin')->user()->email }})
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
    @section('space-work')

    <h2 class="mb-4">Chapter</h2>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSubjectModel">
    Add A Chapter
  </button><br><br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Chapter</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      
        @if(count($subject ?? []) > 0 )

        @foreach($subject as $subject)
        <tr>
            <td>{{ $subject->id}}</td>
            <td>{{ $subject->subject}}</td>
            <td>
                <button class="btn btn-info editButton" data-id="{{ $subject->id}}" data-subject="{{ $subject->subject}}" data-toggle="modal" data-target="#editSubjectModel">Edit</button>
            </td>
            <td>
                <button class="btn btn-danger deleteButton" data-id="{{ $subject->id}}"  data-toggle="modal" data-target="#deleteSubjectModel">Delete</button>
            </td>
        </tr>

        @endforeach
        
        @else
        
        <tr>
            <td colspan="4">Subjects Not Found!</td>
      </tr>
      @endif
    </tbody>
  </table>


  
  <!-- Modal -->
  <div class="modal fade" id="addSubjectModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form id="addSubject">
            @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Chapter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>Chapter :</label><br>
          {{-- <input type="text" name="subject" placeholder="Enter the Subject Name" required> --}}
          <textarea name="subject" rows="10" cols="50" placeholder="Enter the Chapter Name" required></textarea>
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
<div class="modal fade" id="editSubjectModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Chapter</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="editSubject">
            @csrf
                <div class="modal-body">
                <label>Chapter :</label><br>
                {{-- <input type="text" name="subject" placeholder="Enter the Subject Name" id="edit_subject" required> --}}
                <textarea name="subject" rows="10" cols="50" placeholder="Enter the Chapter Name" id="edit_subject" required></textarea>
                <input type="hidden" name="id" id="edit_subject_id">
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
<div class="modal fade" id="deleteSubjectModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Delete Subject</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="deleteSubject">
            @csrf
                <div class="modal-body">
                <p>Are you sure you want to delete this subject?</p>
                <input type="hidden" name="id" id="delete_subject_id">
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

        $("#addSubject").submit(function(e){

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('addSubject') }}",
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

        //edit subject
        $(".editButton").click(function(){
           var subject_id = $(this).attr('data-id');
           var subject = $(this).attr('data-subject');
           $("#edit_subject").val(subject);
           $("#edit_subject_id").val(subject_id);
        });

        $("#editSubject").submit(function(e){

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('editSubject') }}",
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


        //delete subject 

        $(".deleteButton").click(function(){

            var subject_id = $(this).attr('data-id');

            $("#delete_subject_id").val(subject_id);
        });

        $("#deleteSubject").submit(function(e){

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('deleteSubject') }}",
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
