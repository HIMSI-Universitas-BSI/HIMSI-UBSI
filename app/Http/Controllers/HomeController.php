<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\BennerHelper;
use App\Helpers\SettingHelper;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        // Get Setting Helpers Hero Section
        $data['heroTitle'] = SettingHelper::getSetting('title_hero');
        $data['heroAnimate'] = SettingHelper::getSetting('animate_hero');
        $data['heroText'] = SettingHelper::getSetting('text_hero');
        $data['gabungSekarang'] = SettingHelper::getSetting('gabung_sekarang');
        $data['bukuPedoman'] = SettingHelper::getSetting('buku_pedoman');

        $data['large'] = BennerHelper::getBennerImageUrl('hero_large');
        $data['kanan'] = BennerHelper::getBennerImageUrl('hero_1');
        $data['kiri'] = BennerHelper::getBennerImageUrl('hero_2');
        $data['kecil'] = BennerHelper::getBennerImageUrl('hero_kecil');

        // Get Setting Helpers About Section
        $data['aboutTextA'] = SettingHelper::getSetting('about_text_a');
        $data['aboutTextB'] = SettingHelper::getSetting('about_text_b');
        $data['vision'] = SettingHelper::getSetting('vision');
        $data['mission'] = SettingHelper::getSetting('mission');
        $data['aboutImage'] = BennerHelper::getBennerImageUrl('about_image');

        return view('homepage', $data);
    }
}
