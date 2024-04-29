<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
     public $page, $selected;
    public function __construct($page, $selected)
    {
        $this->page = $page;
        $this->selected = $selected;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-layout');
    }
}
