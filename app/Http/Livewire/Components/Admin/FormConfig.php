<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Configuracao;
use Livewire\WithFileUploads;
use App\Classes\Configuracao as Config;
use Illuminate\Support\Facades\Storage;

class FormConfig extends Component
{
    use WithFileUploads;
    public $limite_registros = null;
    public $valor_pix = null;
    public $chave_pix = null;
    public $document = null;
    public $document_term = null;


    public $object = null;

    protected $rules = [
        'limite_registros' => 'required|integer|min:0',
        'valor_pix' => 'required|numeric',
        'chave_pix' => 'required',
        'document' => 'file|max:20480',//20mb - 1mb= 1024'
        'document_term' => 'file|max:5120' //5mb
    ];

    public function mount()
    {
        $this->object = Configuracao::find(1);
    }


    public function save()
    {
        $this->validate();
        try{
            Configuracao::where('id', 1)->update([
                'limite_registros' => $this->limite_registros,
                'valor_pix' => $this->valor_pix,
                'chave_pix' => $this->chave_pix,
            ]);
            if(!empty($this->document)){//fazer upload
                if(!empty($this->object->document) && Storage::exists(Config::CONFIG_DOCUMENT.$this->object->document)){
                    Storage::delete(Config::CONFIG_DOCUMENT.$this->object->document);
                }
                $name = 'result.'.$this->document->extension();
                $this->logo->storeAs(Config::CONFIG_DOCUMENT, $name);
                Configuracao::where('id', 1)->update([
                    'document' => $name,
                ]);
            }
            if(!empty($this->document_term)){//fazer upload
                if(!empty($this->object->document_term) && Storage::exists(Config::CONFIG_DOCUMENT.$this->object->document_term)){
                    Storage::delete(Config::CONFIG_DOCUMENT.$this->object->document_term);
                }
                $name = 'term.'.$this->document->extension();
                $this->logo->storeAs(Config::CONFIG_DOCUMENT, $name);
                Configuracao::where('id', 1)->update([
                    'document' => $name,
                ]);
            }

        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.components.admin.form-config');
    }
}
