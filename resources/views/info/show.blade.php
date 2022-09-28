@extends('info.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Info Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Firstname : {{ $info->firstame }}</h5>
        <p class="card-text">Lastname : {{ $info->lastname }}</p>
        <p class="card-text">Address : {{ $info->address }}</p>
        <p class="card-text">Birthday : {{ $info->bday }}</p>
  </div>
       
    </hr>
  
  </div>
</div>