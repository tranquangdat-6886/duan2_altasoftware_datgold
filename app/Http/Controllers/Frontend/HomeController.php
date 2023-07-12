<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $package = Package::all();
        return view('frontend.pages.home')->with('package', $package);
    } 
}