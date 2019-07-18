@extends('layouts.app')

@section('content')
         

<div class="container">
  <form action="news" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <label for="fname">Title</label>
    <input type="text" id="fname" name="city" placeholder="dhaka">

    <label for="lname">Action</label>
    <input type="text" id="lname" name="village" placeholder="">

    <label for="lname">Topic</label>
    <input type="text" id="lname" name="postcode" placeholder="">
    

    <label for="country">Capital</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="Bangladesh">Bangladesh</option>

      <option value="usa">USA</option>
    </select>
      

    <input type="submit" value="Submit">
  </form>
</div>

@endsection