@extends('layouts.Main')
@section('titlepage')
<title>Welcome Home Page</title>    
@endsection

@section('main-section')
    <h3 class=" text-center">Student Crud Detail Project</h3>
    <div class="row">
        <div class="col-md-4">
            <h3 class=" text-center">Register Form</h3>
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
                
            @endif
            <form action="" method="post">
                @csrf
            <div class="form-group mb-2">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group mb-2">
                <label for="">Marks</label>
                <input type="number" name="marks" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
              </div>
              <div class="form-group">
                <label for="">City</label>
                <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
              </div>
           <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        {{-- data show --}}
        <div class="col-md-8">
            <h3 class=" text-center">All Student Data</h3>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Marks</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $student)
                        <tr>
                            <td scope="row">{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->marks}}</td>
                            <td>{{$student->city}}</td>
                            <td>
                            <a href="{{url('/edit',$student->id)}}" class=" btn btn-outline-primary"  rel="noopener noreferrer">Edit</a>
                            <a href="{{url('/delete',$student->id)}}" class=" btn btn-outline-danger"  rel="noopener noreferrer">Del</a>
                            </td>
                        </tr>       
                        @endforeach
                     
                       
                    </tbody>
            </table>
        </div>
    </div>
@endsection