<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {

        $movies = Movie::all();

        // $num = $movie['vote'];

        // function transformToStar($num)
        // {
        //     $max = round($num) / 2;
        //     $star = [];

        //     $i = 1;
        //     while ($i < $max) {
        //         $star[] = "⭐";
        //         $i++;
        //     }

        //     return $star;
        // };


        return view('home', compact('movies'));
    }
}
