<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('partials.home');
    } 
    public function contact() {
        return view('partials.contact');
    } 
}
