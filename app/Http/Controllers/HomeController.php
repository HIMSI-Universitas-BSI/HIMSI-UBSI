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
        $data['heroTitle'] = SettingHelper::getSetting('hero_title');
        $data['heroAnimate'] = SettingHelper::getSetting('animate_hero');
        $data['heroText'] = SettingHelper::getSetting('hero_text');
        $data['gabungSekarang'] = SettingHelper::getSetting('gabung_sekarang');
        $data['bukuPedoman'] = SettingHelper::getSetting('buku_pedoman');

        return view('homepage', $data);
    }
}
