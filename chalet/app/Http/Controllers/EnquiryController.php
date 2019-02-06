<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use App\User;

class EnquiryController extends Controller
{
    /**
     * Create a new entry in the enquiry table
     */
    public function create(Request $request)
    {

        // Validate
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

        // Get or create the associated user
        $user = User::where('first_name', $request->first_name)
                        ->where('last_name', $request->last_name)
                        ->where('email', $request->email)
                        ->first();

        if($user == null){
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->contact_number = $request->contact_number;
            $user->save();
        }

        $enquiry = new Enquiry();

        $enquiry->user_id = $user->id;
        $enquiry->date_from = $request->date_from;
        $enquiry->date_to = $request->date_to;
        $enquiry->number_of_adults = $request->number_of_adults;
        $enquiry->number_of_children = $request->number_of_children;
        $enquiry->special_requirements = $request->special_requirements;
        $enquiry->comments = $request->comments;
        $enquiry->save();

        return back();

    }
}
