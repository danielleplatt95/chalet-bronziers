<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;

class EnquiryController extends Controller
{
    public function newEnquiry(Request $request)
    {
        $enquiry = new Enquiry();

        $rules = [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email',
            'contact_number' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'number_of_adults' => 'required|numeric',
            'number_of_children' => 'required|numeric',
            'special_requirements' => 'max:1000',
            'comments' => 'max:1000',
        ];
    
        $customMessages = [
            'required' => 'Please fill in your :attribute.',
            'numeric' => 'Oops! We need a number for :attribute.',
        ];
    
        $this->validate($request, $rules, $customMessages);

    }
}
