<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Review;

class ReviewController extends Controller
{
    /**
     * Add a new review
     */
    public function create(Request $request)
    {

        // Make sure review is in the past
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;

        // Validate
        $rules = [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email',
            'contact_number' => 'required',
            'overall_experience' => 'required|integer|between:1,5',
            'comfort' => 'required|integer|between:1,5',
            'cleanliness' => 'required|integer|between:1,5',
            'month_of_stay' => 'required|integer|between:1,12',
            'year_of_stay' => 'required|integer|between:2010,' . $year,
            'message' => 'max:1000',
        ];

        if($request->month_of_stay > $month)
        {
            // Return back with errors
        }
    }

    public function show()
    {
        $reviews = Review::where('approved','1')->get();
    }
}
