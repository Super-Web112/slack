<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Notifications\Notification;

use App\Notifications\TestNotification;

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

Route::get('/slack', 'SlackController@slack');
