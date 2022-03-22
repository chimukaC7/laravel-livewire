<?php

use App\Http\Livewire\Contacts;
use App\Http\Livewire\FileUpload;
use App\Http\Livewire\NotificationDemo;
use App\Http\Livewire\Select2;
use App\Http\Livewire\Statecitydropdown;
use App\Http\Livewire\UserPagination;
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
    return view('welcome');
});

Route::get('user-datatables', function () {
    return view('default');
});

Route::get('notification', NotificationDemo::class);

Route::get('statecitydropdown', Statecitydropdown::class);

Route::get('select2', Select2::class);

//Route::get('image-upload', function () {
//        return view('default');
//});

Route::get('file-upload', FileUpload::class );

//Route::get('user-pagination', function () {
//    return view('default');
//});

Route::get('user-pagination', UserPagination::class);

Route::get('/form', function () {
    return view('form');
});

//Route::get('contacts', function () {
//    return view('default');
//});

Route::get('contacts', Contacts::class);
