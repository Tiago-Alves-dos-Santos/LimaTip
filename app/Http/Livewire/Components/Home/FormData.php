<?php

namespace App\Http\Livewire\Components\Home;

use Livewire\Component;

class FormData extends Component
{
    public $term_name= null;
    public function mount($term_name)
    {
        $this->term_name = $term_name;
    }
    public function render()
    {
        return view('livewire.components.home.form-data');
    }
}
