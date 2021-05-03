
@extends('layouts.master')


@section('content')
  @if(Session::has('success'))
  <div class="alert alert-success">{{Session::get('success')}}</div>
  @endif
  
<form method="post" action="{{url('addtype')}}" enctype="multipart/form-data">

@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="file" class="form-control" name = "photo" id="exampleFormControlInput1" placeholder="Title Put Here">
    @error('photo')
    <small class="form-text form-danger">{{$messages}}</small>
    @enderror
  </div>


  <div class="form-group">
    <input type="submit" value="Submit" class="btn btn-success">
  </div>
</form>
@stop