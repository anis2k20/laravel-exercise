<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $users = User::all();
//    $phone = User::find(1)->phone;
//
//    $user = Phone::find(1)->user;
//    return $user.'-'. $phone;
    return view('index', compact('users'));
});
