<?php

namespace App\Http\Controllers;

use App\Models\Complain;
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
            'name' => ['required','string', 'max:255', 'min:2'],
            'mobile_number' => ['required', 'numeric', 'digits_between:10,15'],
            'email' => ['required', 'email', 'max:255'],
            'service' => ['required', 'string',],
            'address' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);

        Complain::create([
            'name' => $request->name,
            'number' => $request->mobile_number,
            'email' => $request->email,
            'service' => $request->service,
            'address' => $request->address,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'Your complaint has been submitted successfully! Our team will reach out to you soon.');
    }

    
}