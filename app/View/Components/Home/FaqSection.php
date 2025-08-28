<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $faqs;

    public function __construct(
        $faqs,
        public string $faqTitle
    )
    {
        $this->faqs = $faqs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.faq-section');
    }
}
