<?php

use Illuminate\Support\Facades\Route;

use App\Models\Userdev;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $users = Userdev::all();
    return view('welcome', ['users' => $users]);
});


Route::get('/user/{id}', function ($id) {
    $user = Userdev::where('id', $id)->get();
    echo $user;
    return view('edituser', ['id' => $user]);
});


Route::post('/', function () {
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
});


Route::post('/user/{id}', function () {

    $userID = request('user-id');

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
});