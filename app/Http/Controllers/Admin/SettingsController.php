<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $setting=Setting::first();
        return view('dashboard.pages.setting.setting',compact('setting'));
    }

    public function updateSetting(Request $request){

        $setting=Setting::first();
        $validations = $request->validate([
            "store_name" => 'required',
            "currency" => 'required',
            "store_state"=>'',
            "VAT" => 'required|numeric',
        ]);
        if(empty($request->get('store_state')))
            $validations['store_state']=0;
        $setting->update($validations);

        return back()->with('success','Setting edited.');

    }
}
