
@extends('layouts.Main')
@section('titlepage')
<title>Welcome Edit Page</title>    
@endsection

@section('main-section')
    <div class="row">
        <div class="col-md-4">
            <h3 class=" text-center">Edit Form</h3>
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
                
            @endif

<form action="" method="post">
    @csrf
@method('PUT')
<div class="form-group mb-2">
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control" value="{{$student->name}}" placeholder="" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
<div class="form-group mb-2">
    <label for="">Marks</label>
    <input type="number" name="marks" id="" class="form-control"  value="{{$student->marks}}" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
  </div>
  <div class="form-group">
    <label for="">City</label>
    <input type="text" name="city" id="" class="form-control"  value="{{$student->city}}" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
  </div>
<button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection