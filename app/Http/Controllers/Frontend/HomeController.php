<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $package = Package::all();
        $settings = Setting::find(1);
        return view('frontend.pages.home')->with('package', $package)->with('settings', $settings);
    } 
}