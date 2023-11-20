<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Models\Cover;

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
        $cover = Cover::where('movie_id', $id, $movie->cover_id)->first();


        return view('movie-detail', compact('movie','id', 'cover'));
    }

}
