<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class add extends Controller
{
    public function store(Request $request){
       $validation = $request->validate([
        'body' => 'string|required',
        'title' => 'string|required',
       ]);
       
       $post = new Post();
       $post->title=$request->title;
       $post->body=$request->body;

       $post->save();

       return "succes";
    }
}
