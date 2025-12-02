<?php

namespace App\View\Components;

use App\Models\CompanyPartner;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Partner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partner');
    }

    public function alumniCompany()
    {
        return CompanyPartner::where('type', '=', 'alumni')->get();
    }

    public function partnerCompany()
    {
        return CompanyPartner::where('type', '=', 'partner')->get();
    }
}
