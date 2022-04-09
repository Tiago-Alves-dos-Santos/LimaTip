<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Registro;
use App\Models\Configuracao;
use Livewire\WithPagination;

class TableRegistros extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'registros-reload' => '$refresh',
    ];
    public function render()
    {
        return view('livewire.components.admin.table-registros',[
            'registros' => Registro::orderBy('created_at','desc')->paginate(Configuracao::find(1)->mostrar_por_pagina)
        ]);
    }
}
