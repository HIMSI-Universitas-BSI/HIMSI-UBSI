<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkingProsesSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $workingProsesTitle,
        public string $workingProsesText,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.working-proses-section');
    }
}
