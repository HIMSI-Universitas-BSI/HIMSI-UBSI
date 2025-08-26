<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortofolioSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $portofolioText,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portofolio-section');
    }
}
