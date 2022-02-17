<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        // $movies = Movie::all();
        $movies = Movie::orderBy('title', 'asc')->get();
        // dd($movies_order);
        // $data = ['movies' => $movies];
        $data = ['movies' => $movies];
        // $order = ['movies_order' => $movies_order];
        return view('home', $data);
    }
}
