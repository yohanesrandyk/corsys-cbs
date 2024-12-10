<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonCard extends Component
{
    public $title;
    public $description;
    public $image;
    public $link;
    public $bgColor;
    public $descriptionSize;

    public function __construct($title, $description, $image, $link, $bgColor, $descriptionSize = 'font-size-sm')
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->link = $link;
        $this->bgColor = $bgColor;
        $this->descriptionSize = $descriptionSize;
    }

    public function render()
    {
        return view('components.button-card');
    }
}