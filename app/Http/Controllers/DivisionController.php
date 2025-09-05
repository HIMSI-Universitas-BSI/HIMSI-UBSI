<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use App\Helpers\SettingHelper;

class DivisionController extends Controller
{
    // method untuk menampilkan detail divisi
    public function showDivision($id)
    {
        $divisi = Division::findOrFail($id);
        
        $instagram = SettingHelper::getSetting('instagram');
        $youtube = SettingHelper::getSetting('youtube');
        $tiktok = SettingHelper::getSetting('tiktok');
        $linkedin = SettingHelper::getSetting('linkedin');

        return view('divisi-show', compact('divisi', 'instagram', 'youtube', 'tiktok', 'linkedin'));
    }
}
