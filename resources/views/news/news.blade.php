@extends('layouts.app')

@section('content')
         

<div class="container">
  <form action="news" method="post">
    {{ csrf_field()}}
    <label for="fname">address</label>
    <input type="text" id="fname" name="city" placeholder="dhaka">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="village" placeholder="">

    <label for="lname">Enter your phone number</label>
    <input type="text" id="lname" name="postcode" placeholder="1212">


    <label for="country">Country</label>
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