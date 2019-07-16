@extends('layouts.app')

@section('content')
<h3 class="header_form">welcome</h3>

<div class="container">
  <form action="more" method="post">
    {{ csrf_field()}}        


<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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