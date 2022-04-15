<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title = null;
    public $component = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $component = '')
    {
        $this->title = $title;
        $this->component = $component;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
