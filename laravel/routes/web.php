<?php

use App\Http\Controllers\addController;
use App\Http\Controllers\PostsControllers;
use App\Http\Controllers\UsersControllers;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/display', function () {
    return view('display');
});

// routing with para.
// Route::get('/users/{name}', function ($name) {
//     return $name;
// });


// controller import
// Route::controller(UsersControllers::class)->group(function(){
   
//     Route::get( "/users" , "createUser" );

//     Route::get( "/users/create" , "createUserss" );

// });

 
// resources controller 

Route::resource("posts" , PostsControllers::class)->middleware("auth"); //=>middleware auth

Route::post('/save' , [addController::class , "store"] )->name('Add');
Route::post('/delete/{id}' , [addController::class , "delete"] )->name('delete');

Route::get('/add', function () {
    return view('users');
});


Route::get('/display' , [addController::class , "display"] )->name('display');



