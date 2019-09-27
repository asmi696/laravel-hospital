@extends('layouts.app')

@section('content')
@if(Session::has('error'))
<p class="alert {{ Session::get('alert-class', 'col-5 mx-auto alert-danger') }}"><strong>{{ Session::get('error') }}</strong></p>
@endif
<!-- <div class="container col-md-8 pt-4 ">
<div class="jumbotron jumbotron-fluid-xs" style="background:gray;">
  <div class="container">
    <h3 class="display-4">Dear Doctors !!!</h3>
    <p class="lead">DO YOU WANT TO REGISTER OUR WEBPAGE !!!!</p>
    <button class="btn btn-primary">Contact Us</button>
  </div>
</div>
</div><br> -->
      
<div class="container col-md-5 pb-4">
  <div class="card text-center" style="background:gray;">
  <div class="card-header">
    USER REGISTER PANEL
  </div>
  <div class="card-body">
      <?php
        if (!empty($msg)){
          echo '<div class="alert alert-info">'.$msg.'</div>';
        }
      ;?>
      
    <form method="post" action="{{url('/profile') }}">
    @csrf
      <div class="form-group">
        <label for="exampleInputcountry1"class="fas fa-user-graduate">&nbsp Select Your salutation :</label>
        <div class="input-group mb-3">
        <select class="custom-select" id="salutation" name="salutation" autofocus="">
          <option selected value="">Choose...</option>
          <option value="1">Mr.</option>
          <option value="2">Mrs.</option>
          <option value="3">Ms.</option>
        </select>

        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fas fa-users">&nbsp Enter First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fas fa-user-tie">&nbsp Enter Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="far fa-address-card">&nbsp Enter Your Address:</label>
        <textarea id="address" name="address" class="col-md-12" placeholder="Enter You Address"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fas fa-mobile-alt">&nbsp Enter Mobile Number:</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fas fa-user-tie">&nbsp Enter Your Age:</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Your Age">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fas fa-user-tie">&nbsp Enter Your NIC:</label>
        <input type="text" class="form-control" id="nic" name="nic" placeholder="Enter Your NIC">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="fas fa-user-tie">&nbsp Enter Your Date Of Birth:</label>
        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Enter Your NIC">
      </div>
      
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
@endsection('content')
