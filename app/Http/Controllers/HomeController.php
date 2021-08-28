<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function home(){

        return view('home',['categories'=>Category::all(),'posts'=>Post::all()]);
    }
}
