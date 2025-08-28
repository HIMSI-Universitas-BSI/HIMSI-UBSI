<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BranchSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $branches;

    public function __construct($branches)
    {
        $this->branches = $branches;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.branch-section');
    }
}
