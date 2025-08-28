<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CountSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $counts;

    public function __construct($counts)
    {
        $this->counts = $counts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.count-section');
    }
}
