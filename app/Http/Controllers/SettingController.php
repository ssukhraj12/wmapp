<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allSettings()
    {
        return view('settings.all');
    }

    public function generalSettings(){

        return view('settings.general');
    }

    public function allChannels()
    {
        return view('settings.channels');
    }

}
