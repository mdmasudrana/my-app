@extends('layouts.app')

@section('content')
         

<h3 class="header_form">Contact Us</h3>

<div class="container">
  <form action="contact" method="post">
    {{ csrf_field()}}
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="emailaddress" placeholder="Email@">

    <label for="lname">Enter your phone number</label>
    <input type="text" id="lname" name="mobile" placeholder="+880">


    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="canada">Bangladesh</option>

      <option value="usa">USA</option>
    </select>

    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
@endsection

