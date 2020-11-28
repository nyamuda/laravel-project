@extends('layouts.layout')

@section('content')
<div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        New user
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="container">
                        <form action="/" method="POST">
                            @csrf
                            <h2>Contact Us</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first">First Name</label>
                                        <input name="first-name" type="text" class="form-control" placeholder=""
                                            id="first">
                                    </div>
                                </div>
                                <!--  col-md-6   -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last">Last Name</label>
                                        <input name="last-name" type="text" class="form-control" placeholder=""
                                            id="last">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company">Username</label>
                                        <input type="text" class="form-control" placeholder="" id="username">
                                    </div>


                                </div>
                                <!--  col-md-6   -->

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input name="mobile" type="tel" class="form-control" id="phone"
                                            placeholder="phone">
                                    </div>
                                </div>
                                <!--  col-md-6   -->
                            </div>
                            <!--  row   -->


                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="email">
                                    </div>
                                </div>
                                <!--  col-md-6   -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="password"
                                            placeholder="password">
                                    </div>

                                </div>
                                <!--  col-md-6   -->
                            </div>
                            <!--  row   -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>



</div>


<div>
    
    <div class="accordion">
        @foreach($users as $user)
        <div class="card">
            <h5 class="card-header">User {{$user->id}}</h5>
            <div class="card-body">
                <h5 class="card-title">{{$user->name}} {{$user->surname}}</h5>
                <p class="card-text"> {{$user->email}}</p>

                <p class="card-text"> {{$user->mobile}}</p>
                <button id=@php echo $user->id @endphp type="button" class="user-btn btn btn-outline-dark">Edit</button>
            </div>
        </div>
        @endforeach


    </div>
</div>
</ @endsection