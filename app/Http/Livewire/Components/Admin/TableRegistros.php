<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Registro;

class TableRegistros extends Component
{
    public function render()
    {
        return view('livewire.components.admin.table-registros',[
            'registros' => Registro::orderBy('created_at','desc')->paginate(10)
        ]);
    }
}
