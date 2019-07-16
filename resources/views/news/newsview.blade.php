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
      <td>{{$view->country}}</td>
    </tr>    
  @endforeach
  </tbody>
</table>

@endsection