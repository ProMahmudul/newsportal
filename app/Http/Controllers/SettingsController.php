<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $setting = Setting::orderBy('id', 'DESC')->first();
        $user = User::orderBy('id', 'DESC')->first();
        return view('admin.settings.settings')->with(['setting' => $setting, 'user' => $user]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'dimensions:max_width=200,max_height=50',
            'favicon' => 'dimensions:max_width=100,max_height=100',
        ], [
            'logo.dimensions' => 'The logo has 200x50 px maximum dimension',
            'favicon.dimensions' => 'The favicon has 100x100 px maximum dimension',
        ]);

        $setting = Setting::find($request->id);
        $setting->site_title = $request->site_title;
        $setting->tagline = $request->tagline;
        if ($request->hasFile('logo')) {
            $setting->logo = $request->file('logo')->store('public/logo');
        }
        if ($request->hasFile('favicon')) {
            $setting->favicon = $request->file('favicon')->store('public/favicon');
        }
        $setting->site_information = $request->information;
        $setting->save();

        $user = User::find(Auth::id());
        $user->email = $request->email;
        $user->save();

        Session::flash('message', 'Settings updated successfully!');
        Session::flash('alert_type', 'alert-success');
        return redirect()->route('settings');
    }

    public function changePassword()
    {
        return view('admin.settings.changePassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'new_confirm_password' => 'required|same:new_password',
        ]);

        $data = $request->all();
        $user = User::find(auth()->user()->id);
        if (!Hash::check($data['current_password'], $user->password)) {
            return back()->with('error', 'You have entered wrong password');
        } else {
            $user->update(['password' => Hash::make($request->new_password)]);
            Session::flash('message', 'Password updated successfully!');
            Session::flash('alert_type', 'alert-success');
            return redirect()->route('change.password');
        }
    }
}
