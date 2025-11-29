<?php

use App\Models\Program;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $programs = Program::all();
    $testimonials = Testimonial::all();
    $videoTestimonials = $testimonials->where('type', '=', 'video');
    $storyTestimonials = $testimonials->where('type', '=', 'story');
    return view('layout', compact('programs', 'videoTestimonials', 'storyTestimonials'));
});
