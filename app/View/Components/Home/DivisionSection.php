<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DivisionSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $divisi;

    public function __construct($divisi)
    {
        $this->divisi = $divisi;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.division-section');
    }
}
