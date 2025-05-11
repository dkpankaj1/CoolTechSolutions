<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $complains = Complain::latest()->take(5)->get();

        $totalComplains = Complain::count();
        $totalPending = Complain::where('status', 'pending')->count();
        $totalInProgress = Complain::where('status', 'in progress')->count();
        $totalResolved = Complain::where('status', 'resolved')->count();
        
        return view('admin.pages.dashboard',[
            'complains' => $complains,
            'totalComplains' => $totalComplains,
            'totalPending' => $totalPending,
            'totalInProgress' => $totalInProgress,
            'totalResolved' => $totalResolved,
        ]);
    }
}
