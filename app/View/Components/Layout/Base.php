<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    public $title;
    public $whatsapp;
    
    /**
     * Create a new component instance.
     */
    public function __construct($title = 'JASANTATECH', $whatsapp)
    {
        $this->title = $title;
        $this->whatsapp = $whatsapp;
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
