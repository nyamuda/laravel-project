@extends('layouts.layout')

@section('content')
    <div id="main-view">
        <h1></h1>
        <div>

            <!-- Button trigger modal -->
            <button id="add-user-btn" type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
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
                                                <input name="first-name" type="text" class="form-control" placeholder="name"
                                                    id="first">
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last">Last Name</label>
                                                <input name="last-name" type="text" class="form-control"
                                                    placeholder="surname" id="last">
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="company">Username</label>
                                                <input name="username" type="text" class="form-control"
                                                    placeholder="username" id="username">
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

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="job-title">Job Title</label>
                                                <input name="job-title" type="text" class="form-control" id="job-title"
                                                    placeholder="job title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="bio">Bio</label>
                                                <textarea name="bio" class="form-control" rows="5" cols="80"
                                                    placeholder="Bio" id="bio"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>


        <div>

            <div class="accordion" id="user-list-container">
                @foreach ($users as $user)
                    <div class="card text-white bg-dark each-user">
                        <h5 class="card-header">User {{ $user->id }}</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }} {{ $user->surname }}</h5>
                            <p class="card-text"> {{ $user->email }}</p>

                            <p class="card-text"> {{ $user->mobile }}</p>
                            <button id=@php echo $user->id @endphp type="button" class="user-btn btn
                                btn-outline-primary">Edit</button>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</ @endsection
