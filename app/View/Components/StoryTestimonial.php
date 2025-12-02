<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class StoryTestimonial extends Component
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
        return view('components.story-testimonial');
    }

    public function storyTestimonials()
    {
        return Testimonial::where('type', '=', 'story')->get();
    }
}
