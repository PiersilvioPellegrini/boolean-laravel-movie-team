<?php

namespace App\Http\Controllers;


use App\Models\Movie;

class IndexController extends Controller
{
    function index(){

        $allMovies = Movie::
            latest()->take(10)
            ->orderBy("title","asc")
            ->get();

        return view('index', compact('allMovies'));
    }
}
