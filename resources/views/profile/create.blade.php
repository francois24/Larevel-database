@extends('profile.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Profile Page</div>
  <div class="card-body">
      
      <form action="{{ url('profile') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label>Firstname</label></br>
        <input type="text" name="firstname" id="name" class="form-control"></br>

        <label>Lastname</label></br>
        <input type="text" name="lastname" id="address" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="mobile" class="form-control"></br>

        <label>Birthday</label></br>
        <input type="date" name="bday" id="mobile" class="form-control"></br>

        <input class="form-control" name="photo" type="file" id="photo">
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop