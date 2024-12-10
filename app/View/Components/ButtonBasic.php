<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonBasic extends Component
{
    /**
     * Create a new component instance.
     */
    public $style;
    public $type;
    public $buttonType;
    public $action;
    public $id;
    public $disable;
    public function __construct($style = '', $type = 'primary', $action = '', $id = null, $disable = false, $buttonType = 'button')
    {
        $this->style = $style;
        $this->type = $type;
        $this->action = $action;
        $this->id = $id;
        $this->disable = $disable;
        $this->buttonType = $buttonType;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return
            view('components.button-basic');
    }
}
