<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class PostController extends Controller
{
    public function create(){
        // $channels = Channel::orderBy('name')->get();

        return view('posts.create');
    }
}
