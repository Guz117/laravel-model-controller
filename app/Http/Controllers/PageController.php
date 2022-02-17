<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        dd($movies);
        // $data = ['movie' => $movies];
        return view('home');
    }
}
