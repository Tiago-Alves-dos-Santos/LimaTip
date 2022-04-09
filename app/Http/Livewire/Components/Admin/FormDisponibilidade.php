<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Disponibilidade;
use Illuminate\Validation\Rule;

class FormDisponibilidade extends Component
{
    public $disponibilidade = null;
    public $disponivel = null;
    public $disponivel_status = null;


    public $object = null;

    protected $rules = [
        'disponibilidade' => 'required|date',
        'disponivel' => 'required|in:sim,nao',
    ];

    public function mount()
    {
        $this->object = Disponibilidade::find(1);
        $this->disponibilidade = date('Y-m-d\TH:i', strtotime($this->object->disponibilidade));
        $this->disponivel = $this->object->disponivel;
        $this->disponivel_status = $this->object->disponivel_status;
    }

    public function verifyDisponibility()
    {
        $this->disponivel_status = Disponibilidade::verifyDisponibility($this->disponibilidade);
    }
    public function save()
    {
        $this->validate();
        try{
            Disponibilidade::where('id', 1)->update([
                'disponibilidade' => $this->disponibilidade,
                'disponivel' => $this->disponivel,
                'disponivel_status' => Disponibilidade::verifyDisponibility($this->disponibilidade)
            ]);
            $this->verifyDisponibility();
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.components.admin.form-disponibilidade');
    }
}
