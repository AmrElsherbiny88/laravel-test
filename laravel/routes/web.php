<?php

use App\Http\Controllers\UsersControllers;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});







Route::controller(UsersControllers::class)->group(function(){
   
    Route::get( "/users" , "createUser" );

});