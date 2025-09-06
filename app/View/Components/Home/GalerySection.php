<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GalerySection extends Component
{
    /**
     * Create a new component instance.
     */
    public $branchesDesc;
    public $branchesAsc;

    public function __construct(
        $branchesDesc,
        $branchesAsc,
        public string $galeryTitle,
        public string $galeryText,
    )
    {
        $this->branchesDesc = $branchesDesc;
        $this->branchesAsc = $branchesAsc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.galery-section');
    }
}
