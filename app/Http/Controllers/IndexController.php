<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class IndexController extends Controller
{
    function index(){

        $allMovies = Movie::all();

        return view('index', compact('allMovies'));
    }
}
