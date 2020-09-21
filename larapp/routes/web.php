<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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
    return view('welcome');
});

Route::get('helloworld', function () {
    dd('Hello alejo');
});

Route::get('users', function () {
    dd(App\User::all()); 
});

Route::get('user/{id}', function ($id) {
    dd(App\User::findOrFail($id)); 
});

Route::get('edades', function () {
    $users = (App\User::all()->take(10));
    for($i = 0; $i<count($users); $i++) {
        $userAge = Carbon::parse($users[$i]->birthdate)->age;
        $created = $users[$i]->created_at->diffForHumans();
        print $users[$i]->name." - "."$userAge"." years old"." - "." created ".$created."; ";
        
    }
});






