<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public function __construct($text = '')
    {
        //
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.menu-section');
    }
}
