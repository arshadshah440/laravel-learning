<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class notifications extends Component
{
    /**
     * Create a new component instance.
     */
    public $messgae;
    public function __construct($messgae)
    {
        //
        $this->messgae=$messgae;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notifications');
    }
}
