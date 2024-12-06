<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     */
    public $style;
    public $type;
    public $action;
    public $id;
    public $disable;
    public $url;
    public $target;
    public function __construct($url = "#", $target = "", $style = '', $type = 'primary', $action = '', $id = null, $disable = false)
    {
        $this->style = $style;
        $this->type = $type;
        $this->action = $action;
        $this->id = $id;
        $this->disable = $disable;
        $this->url = $url;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-link');
    }
}
