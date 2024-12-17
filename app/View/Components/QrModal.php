<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QrModal extends Component
{
    /**
     * Create a new component instance.
     */
    public $barcode;
    public $namaAset;
    public $text;
    public $onclick;

    public function __construct($barcode, $namaAset = '', $text = 'QR Code', $onclick = false)
    {
        //
        $this->barcode = $barcode;
        $this->namaAset = $namaAset;
        $this->text = $text;
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.qr-modal');
    }
}
