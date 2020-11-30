<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdev;

class UserController extends Controller
{
    //
    public function mainpage()
    {
        $users = Userdev::all();
        return view('welcome', ['users' => $users]);
    }

    public function show($id)
    {
        $user = Userdev::where('id', $id)->get();
        echo $user;
        return view('edituser', ['id' => $user]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users_dev',
            'email' => 'required|email|unique:users_dev',
            'username' => 'required|unique:users_dev',
            'password' => [
                'required',
                'string',
                'min:8',             // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', //must contain at least one special character
            ]
        ]);


        $newUser = new Userdev();

        $newUser->email = request('email');
        $newUser->name = request('first-name');
        $newUser->surname = request('last-name');
        $newUser->mobile = request('mobile');
        $newUser->bio = request('bio');
        $newUser->job_title = request('job-title');
        $newUser->username = request('username');
        $newUser->password = request('password');

        error_log($newUser);

        $newUser->save();

        return redirect('/');
    }

    public function change(Request $request)
    {
        $userID = request('user-id');

        $validatedEditedData = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            //Forcing a unique rule(for mobile and username) to ignore a given ID (the one l'm trying to update)
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users_dev,mobile,' . $userID,
            'username' => 'required|unique:users_dev,username,' . $userID,
        ]);



        $updateUser = Userdev::where('id', $userID)->first();

        $updateUser->email = request('user-uneditable-email');
        $updateUser->password = request('user-uneditable-password');
        $updateUser->name = request('first-name');
        $updateUser->surname = request('last-name');
        $updateUser->mobile = request('mobile');
        $updateUser->username = request('username');
        $updateUser->bio = request('bio');
        $updateUser->job_title = request('job-title');

        $updateUser->save();

        return redirect('/');
    }
}