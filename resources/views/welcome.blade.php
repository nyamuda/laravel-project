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

                    <form action="/" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input name="email" type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input name="password" type="password" class="form-control" id="inputPassword4">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach


    </div>
</div>
</ @endsection