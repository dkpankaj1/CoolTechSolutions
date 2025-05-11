<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;

class AdminComplainController extends Controller
{
    public function show(){
     $complains = Complain::latest()->paginate(10); // 10 items per page
     return view('admin.pages.complains', compact('complains'));
    }
     public function create(){
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
       
         return view('admin.pages.complaincreate',['problems' => $problem]);

    }

    public function edit(Complain $complain){
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
       
         return view('admin.pages.complainedit',compact('complain') );

    }
}
