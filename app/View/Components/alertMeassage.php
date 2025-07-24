<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alertMeassage extends Component
{
    /**
     * Create a new component instance.
     */
    public $msg,$class;
    public function __construct($msg,$class)
    {
        //
        $this->msg = $msg;
        $this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-meassage');
    }
}
