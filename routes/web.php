<?php

use Illuminate\Support\Facades\Route;
use App\Events\UserRegistration;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userRegistration', function () {
    return view('userRegistration');
})->name("user.create");

Route::post('/userRegistration', function (Request $request) {

    $name = $request->name;
    event (new UserRegistration($name));

})->name("user.register");
