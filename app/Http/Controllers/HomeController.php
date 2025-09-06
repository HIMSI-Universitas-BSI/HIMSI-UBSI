<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Count;
use App\Models\Branch;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Helpers\BennerHelper;
use App\Helpers\SettingHelper;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        //Get Data
        $data['counts'] = Count::where('active', true)->limit(4)->get();
        $data['divisi'] = Division::where('active', true)->limit(4)->get();
        $data['faqs'] = Faq::where('active', true)->limit(6)->get();
        $data['branches'] = Branch::where('active', true)->with('blogs')->get();
        $data['blogs'] = Blog::where('active', true)->get();
        // gat data galery asc
        $data['branchesAsc'] = Branch::with(['blogs' => function($q) {
            $q->orderBy('created_at', 'asc'); // lama
        }])->get();

        // gat data galery desc
        $data['branchesDesc'] = Branch::with(['blogs' => function($q) {
            $q->orderBy('created_at', 'desc'); // baru
        }])->get();

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

        //Get Setting Helpers Galery Section
        $data['galeryTitle'] = SettingHelper::getSetting('galery_title');
        $data['galeryText'] = SettingHelper::getSetting('galery_text');

        //Get Setting Helpers Faq Section
        $data['faqTitle'] = SettingHelper::getSetting('faq_title');

        //Get Setting Helpers Footer Section
        $data['instagram'] = SettingHelper::getSetting('instagram');
        $data['youtube'] = SettingHelper::getSetting('youtube');
        $data['tiktok'] = SettingHelper::getSetting('tiktok');
        $data['linkedin'] = SettingHelper::getSetting('linkedin');

        return view('pages.homepage', $data);
    }
}
