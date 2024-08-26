<?php

use App\Http\Controllers\PostsControllers;
use App\Http\Controllers\UsersControllers;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// routing with para.
// Route::get('/users/{name}', function ($name) {
//     return $name;
// });


// controller import
Route::controller(UsersControllers::class)->group(function(){
   
    Route::get( "/users" , "createUser" );

    Route::get( "/users/create" , "createUserss" );

});

 
// resources controller 

Route::resource("posts" , PostsControllers::class)->middleware("auth");