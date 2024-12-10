<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $popup;
    public $menuIcon;
    public $menuStyle;
    public $onclick;
    public $menuText;
    public $submenu;
    public function __construct($url = '#', $popup = true, $menuStyle = 'font-weight-bold', $menuIcon = null, $onclick = null, $menuText = null, $submenu = false)
    {
        $this->url = $url;
        $this->popup = $popup;
        $this->menuStyle = $menuStyle;
        $this->menuIcon = $menuIcon;
        $this->onclick = $onclick;
        $this->menuText = $menuText;
        $this->submenu = $submenu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.menu');
    }
}
