<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $aboutTextA,
        public string $aboutTextB,
        public string $vision,
        public string $mission,
        public string $aboutImage
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.about-section');
    }
}
