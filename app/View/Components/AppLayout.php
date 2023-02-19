<?php

namespace App\View\Components;

use App\Models\ProductRequest;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $count_request = ProductRequest::where('request_status', 'new')->count();
        return view('layouts.app', compact('count_request'));
    }
}
