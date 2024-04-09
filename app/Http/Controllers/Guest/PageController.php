<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $movies = Movie::all();

        $moviesWithStars = $movies->map(function ($movie) {
            $movie->stars = $this->toStar($movie->vote);
        });

        return view('home', compact('movies', 'moviesWithStars'));
    }

    public function toStar($vote)
    {
        $max = round($vote / 2);
        $stars = "";

        $j = 0;
        while ($j < $max) {
            $stars .= "⭐";
            $j++;
        }

        return $stars;
    }
}
