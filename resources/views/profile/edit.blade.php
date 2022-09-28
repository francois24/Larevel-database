@extends('profile.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('profile/' .$profile->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{$profile->id}}" id="id" />

        <label>Firstname</label></br>
        <input type="text" name="firstname" id="name" value="{{$profile->firstname}}" class="form-control"></br>

        <label>Lastname</label></br>
        <input type="text" name="lastname" id="address" value="{{$profile->lastname}}" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="mobile" value="{{$profile->address}}" class="form-control"></br>

        <label>Birthday</label></br>
        <input type="Date" name="bday" id="mobile" value="{{$profile->bday}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop