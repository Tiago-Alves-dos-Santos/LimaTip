<?php

namespace App\Http\Livewire\Components\Home;

use Livewire\Component;
use App\Models\Registro;

class FormData extends Component
{
    public $term_name= null;
    public $term_accepeted = '';
    public $nome = null;
    public $telefone = null;

    protected $rules = [
        'nome' => 'required|min:5',
        'telefone' => 'required|min:16|max:16',
        'term_accepeted' => 'required|integer'
    ];

    protected $listeners = [
        'formData-reload' => '$refresh',
    ];

    public function mount($term_name)
    {
        $this->term_name = $term_name;
    }

    public function reload()
    {
        $this->emit('formData-reload');
    }

    public function save()
    {
        //dd("aq");
        $this->validate();
        try{
            Registro::create([
                'nome' => mb_strtoupper($this->nome),
                'telefone' => $this->telefone
            ]);
            $this->reset(['nome', 'telefone','term_accepeted']);
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.components.home.form-data');
    }
}
