<?php

namespace App\View\Components\Layout;

use Closure;
use App\Helpers\SettingHelper;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Base extends Component
{
    public $title;
    public $whatsapp;
    
    /**
     * Create a new component instance.
     */
    public function __construct($title = 'JASANTATECH', $whatsapp = null)
    {
        $this->title = $title;
        $this->whatsapp = $whatsapp ?? SettingHelper::getSetting('whatsapp');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.base', [
            'title' => $this->title,
            'whatsapp' => $this->whatsapp,
        ]);
    }
}
