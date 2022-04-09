<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Registro;
use Livewire\WithPagination;

class TableRegistros extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.components.admin.table-registros',[
            'registros' => Registro::orderBy('created_at','desc')->paginate(10)
        ]);
    }
}
