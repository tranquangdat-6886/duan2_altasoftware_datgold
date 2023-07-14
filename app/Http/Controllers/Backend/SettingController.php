<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index($ID_SET)
    {
        $settings = Setting::find($ID_SET);
        return view('backend.pages.settings.settings')->with('settings', $settings);
    }
    public function setting(Request $request, $ID_SET)
    {
        $setting = Setting::find($ID_SET);
        if (!empty($request->input('email'))) {
            $setting->email = $request->input('email');
        }
        if (!empty($request->input('address'))) {
            $setting->address = $request->input('address');
        }
        if (!empty($request->input('phoneNumber'))) {
            $setting->phoneNumber = $request->input('phoneNumber');
        }

        if ($request->hasFile('logo1')) {
            $image = $request->file('logo1');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Lấy tên gốc của file
            $image->move(public_path('logos'), $imageName);
            $imagePath = 'logos/' . $imageName;
            $setting->logo1 = $imagePath;
        }

        if ($request->hasFile('logo2')) {
            $image1 = $request->file('logo2');
            $imageName1 = time() . '_' . $image1->getClientOriginalName(); // Lấy tên gốc của file
            $image1->move(public_path('logos'), $imageName1);
            $imagePath1 = 'logos/' . $imageName1;
            $setting->logo2 = $imagePath1;
        }

        $setting->save();
        $settings = Setting::find($setting->ID_SET);
        return view('backend.pages.settings.settings')->with('settings', $settings);
    }
}
