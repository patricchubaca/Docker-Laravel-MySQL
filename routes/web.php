<?php

use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $couse = Course::with('modules')->first();

    dd($couse);
});

Route::get('/one', function () {

    $preferences =  User::with('preference')->find(2);

    $user = User::find(2);

    dd($user->preference()->get(), $preferences, $user);
});