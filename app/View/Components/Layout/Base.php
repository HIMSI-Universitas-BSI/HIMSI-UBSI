<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    public $title;
    
    /**
     * Create a new component instance.
     */
    public function __construct($title = 'JASANTATECH')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.base', [
            'title' => $this->title,
        ]);
    }
}
