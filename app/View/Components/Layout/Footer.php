<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    // public string $adress;
    // public string $email;
    // public string $waMarketing;

    // public function __construct($adress, $email, $waMarketing)
    // {
    //     $this->adress = $adress;
    //     $this->email = $email;
    //     $this->waMarketing = $waMarketing;
    // }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.footer');
    }
}
