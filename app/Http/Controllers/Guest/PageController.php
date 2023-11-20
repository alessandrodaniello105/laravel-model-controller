<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function movie_detail($id) {
        $movie = Movie::find($id);

        return view('movie-detail', compact('movie','id'));
    }
}
