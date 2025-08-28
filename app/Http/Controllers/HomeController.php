<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\SettingHelper;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        // Get Setting Helpers Hero Section
        $data['heroTitle'] = SettingHelper::getSetting('HERO_TITLE');
        $data['heroService'] = SettingHelper::getSetting('HERO_SERVICE');
        $data['heroText'] = SettingHelper::getSetting('HERO_TEXT');

        return view('homepage', $data);
    }
}
