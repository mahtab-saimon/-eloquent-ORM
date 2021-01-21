@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-10 mx-auto">

                <a href="" class="btn btn-danger">Add Student</a>

                <hr>
                <table class="table table-responsive table-striped">
                    <tr>
                        <th>SL</th>
                        <th> Name</th>
                        <th>Email</th>
                        <th>Phone</th>

                        <th>Action</th>
                    </tr>
                    @foreach($user as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone}}</td>
                            <td>
                                <a href="{{ URL::to('editStudent/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ URL::to('deleteStudent/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                <a href="{{ URL::to('viewStudent/'.$row->id) }}" class="btn btn-sm btn-success">View</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection