<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageAlert extends Component
{
    /**
     * Create a new component instance.
     */
    public $msg;
    public function __construct($msg)
    {
        //
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.messageAlert');
    }
}
