@extends('layouts.app')

@section('content')
<h3 class="header_form">Contact Us</h3>

<div class="container">
  <form action="newsview" method="post">

<table class="table">
{{ csrf_field()}}

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($newsdata as $view)
    <tr>
      <th scope="row">1</th>
      <td>{{$view->city}}</td>
      <td>{{$view->village}}</td>
      <td>

    <a href="{{URL::to('/')}}/newsdetails/{{$view->id}}" button type="submit" class="btn btn-success" scope="col">View</button></a> 
    <a href="{{URL::to('/')}}/newsedit/{{$view->id}}" button type="submit" class="btn btn-success" scope="col">Edit</button></a> 
    <a href="{{URL::to('/')}}/newsdelete/{{$view->id}}" button type="submit" class="btn btn-danger" scope="col">Delete</button></a> 

   </td>
    </tr>  
  @csrf
  @endforeach
  
  </tbody>
</table>

