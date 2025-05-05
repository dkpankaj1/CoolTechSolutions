<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function create()
    {
        $problem = [
            'ac gas charging',
            'ac servicing',
            'ac installation',
            'fridge repairing',
            'fridge gas charging',
            'fridge installation',
            'washing machine gas charging',
            'washing machine repairing',
            'washing machine installation',
            'others'
        ];

        return view('website.pages.complain.create', ['problems' => $problem]);
    }

    public function store(Request $request)
    {
       
         $request->validate([
            'name' => ' name is required',
            'number' => 'numjbjer is required',
            'service'=>'type of service is required'
         ]);
        
         return redirect()->back()->with('success', 'Complain submitted successfully!');
    }
}
