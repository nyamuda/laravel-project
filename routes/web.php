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
    return view('edituser', ['id' => $user]);
});


Route::post('/', function () {
    $newUser = new Userdev();

    $newUser->email = request('name');
    $newUser->name = request('first-name');
    $newUser->surname = request('last-name');
    $newUser->mobile = request('mobile');

    error_log($newUser);

    $newUser->save();

    return redirect('/');
});