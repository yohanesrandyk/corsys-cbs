<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonModal extends Component
{
    /**
     * Create a new component instance.
     */
    // $idModal, $type, $text
    public $idModal;
    public $type;
    public $text;

    public function __construct($idModal, $type = 'close', $text = 'Button Modal')
    {
        //
        $this->idModal = $idModal;
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-modal');
    }
}
