@extends('profile.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Profile Page</div>
  <div class="card-body">
   
    <img src="{{($profile->photo) }}" width= '100' height='100' class="rounded-circle img-responsive" />
        <div class="card-body">
        <h5 class="card-title">Firstname : {{ $profile->firstname }}</h5>
        <p class="card-text">Lastname : {{ $profile->lastname }}</p>
        <p class="card-text">Address : {{ $profile->address }}</p>
        <p class="card-text">Birthday : {{ $profile->bday }}</p>
  </div>
       
    </hr>
  
  </div>
</div>