@extends('layouts.layout')

@section('content')

<div class="container">
    <form>
      <h2>Contact Us</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="first">First Name</label>
            <input name="first-name" type="text" class="form-control" placeholder="" id="first" value=@php echo $id[0]->name @endphp>
          </div>
        </div>
        <!--  col-md-6   -->
  
        <div class="col-md-6">
          <div class="form-group">
            <label for="last">Last Name</label>
            <input name="last-name" type="text" class="form-control" placeholder="" id="last" value=@php echo $id[0]->surname @endphp>
          </div>
        </div>
        <!--  col-md-6   -->
      </div>
  
  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="company">Username</label>
            <input name="username" type="text" class="form-control" placeholder="" id="username" value=@php echo $id[0]->username @endphp>
          </div>
  
  
        </div>
        <!--  col-md-6   -->
  
        <div class="col-md-6">
  
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input name="mobile" type="tel" class="form-control" id="phone" placeholder="phone" value=@php echo $id[0]->mobile @endphp>
          </div>
        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->
  
  
      <div class="row">
        <div class="col-md-6">
  
          <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="email" value=@php echo $id[0]->email @endphp>
          </div>
        </div>
        <!--  col-md-6   -->
  
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="password" value=@php echo $id[0]->password @endphp>
          </div>
  
        </div>
        <!--  col-md-6   -->
      </div>
      <!--  row   -->
  
  
     
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    
@endsection