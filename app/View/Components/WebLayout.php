<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Log;

class WebLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(Request $request)
    {
        Log::info('User Activity', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'time' => now()->toDateTimeString(),
            'url' => $request->fullUrl(),
            'method' => $request->method(),
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('website.layouts.web');
    }
}
