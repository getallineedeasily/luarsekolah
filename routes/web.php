<?php

use App\Models\Program;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $programs = Program::all();
    return view('layout', compact('programs'));
});
