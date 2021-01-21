
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
@php
  $phone=\App\phone::all();
@endphp
          @foreach($phone as $row)
            <tr>
              <td>{{ $row->user_Id }}</td>
              <td>{{ $row->name }}</td>
              <td>{{ $row->email }}</td>
              <td>{{ $row ->phone}}</td>
              <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>experience</th>
                  <th>salary</th>
                  <th>vacation</th>
                  <th>city</th>
                  <th>image</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employee as $row)
                  <tr>
                    <td>{{ $row->name }}</td>
                    <td class="center">{{ $row->email }}</td>
                    <td class="center">{{ $row->phone }}</td>
                    <td class="center">{{ $row->address }}</td>
                    <td class="center">{{ $row->experience }}</td>
                    <td class="center">{{ $row->salary }}</td>
                    <td class="center">{{ $row->vacation }}</td>
                    <td class="center">{{ $row->city }}</td>
                    <td>
                      <img src="{{ $row->image }}" alt="">
                    </td>
                    <td class="center">
                      <span class="label label-success">Active</span>
                    </td>
                    <td class="center">
                      <a class="btn btn-success" href="{{ URL::to('editStudent/'.$row->id) }}">
                        <i class="halflings-icon white zoom-in"></i>
                      </a>
                      <a class="btn btn-info" href="{{ URL::to('deleteStudent/'.$row->id) }}">
                        <i class="halflings-icon white edit"></i>
                      </a>
                      <a class="btn btn-danger" href="{{ URL::to('viewStudent/'.$row->id) }}">
                        <i class="halflings-icon white trash"></i>
                      </a>
                    </td>
                  </tr>

                @endforeach
                </tbody>
              </table>


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