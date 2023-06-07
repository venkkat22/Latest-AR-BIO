@include('navbar')

    <div class="container">
<br/>
@extends('learning_content.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('learning_content/create') }}" class="btn btn-success btn-sm" title="Add New Education">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>chp_content</th>
                                        <th>content_text</th>
                                        <th>content_vid</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($learning_content as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->chp_content }}</td>
                                        <td>{{ $item->content_text }}</td>
                                        <td>{{ $item->content_vid }}</td>
                                    
                                        <td>
                                            <a href="{{ url('learning_content/' . $item->id) }}" title="View Info"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('learning_content/' . $item->id . '/edit') }}" title="Edit Info"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('learning_content' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Info" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection