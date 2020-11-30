@extends('layouts.layout')

@section('content')
    <h2 id="form2">Change Information</h2>
    <div class="edit-user-form">
        <form action="/user/{id}" method="POST">
            @csrf
            <h2 id="form-title">Edit User Info</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first">First Name</label>
                        <input name="first-name" type="text" class="form-control" placeholder="name" id="first"
                            value="@php echo $id[0]->name @endphp">
                        @error('first-name')
                            <p class="errors">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last">Last Name</label>
                        <input name="last-name" type="text" class="form-control" placeholder="surname" id="last"
                            value="@php echo $id[0]->surname @endphp">
                        @error('last-name')
                            <p class="errors">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <!--  col-md-6   -->
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input required name="username" type="text" class="form-control" placeholder="" id="username"
                            value="@php echo $id[0]->username @endphp">
                        @error('username')
                            <p class="errors">{{ $message }}</p>
                        @enderror

                    </div>


                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input required name="mobile" type="tel" class="form-control" id="phone" placeholder="phone"
                            value="@php echo $id[0]->mobile @endphp">
                        @error('mobile')
                            <p class="errors">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <!--  col-md-6   -->
            </div>
            <!--  row   -->


            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input disabled name="email" type="email" class="form-control" id="email"
                            placeholder="@php echo $id[0]->email @endphp">
                    </div>
                </div>
                <!--  col-md-6   -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input disabled name="password" type="password" class="form-control" id="password" placeholder=""
                            value="@php echo $id[0]->password @endphp">
                    </div>

                </div>
                <!--  col-md-6   -->
            </div>
            <!--  row   -->


            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="job-title">Job Title</label>
                        <input name="job-title" type="text" class="form-control" id="job-title" placeholder="job title"
                            value="@php echo $id[0]->job_title @endphp">
                        @error('job-title')
                            <p class="errors">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="bio">Bio</label>
                        <textarea name="bio" class="form-control" rows="5" cols="80" placeholder="Bio"
                            id="bio">@php echo $id[0]->bio @endphp</textarea>
                        @error('bio')
                            <p class="errors">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
            </div>

            <input name="user-id" type="hidden" value="@php echo $id[0]->id @endphp">
            <input name="user-uneditable-email" type="hidden" value="@php echo $id[0]->email @endphp">
            <input name="user-uneditable-password" type="hidden" value="@php echo $id[0]->password @endphp">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection
