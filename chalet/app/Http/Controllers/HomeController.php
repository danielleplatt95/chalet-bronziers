<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class HomeController extends Controller
{
    public function index()
    {

        $reviews = Review::where('approved','1')
            ->orderBy('overall_experience')
            ->limit(3)
            ->get();

        return view('index')->with('reviews', $reviews);
    }
}
