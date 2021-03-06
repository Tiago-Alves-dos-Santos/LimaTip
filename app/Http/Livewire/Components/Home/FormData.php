<?php

namespace App\Http\Livewire\Components\Home;

use Livewire\Component;
use App\Models\Registro;
use App\Models\Configuracao;
use App\Models\Disponibilidade;
use App\Classes\Configuracao as Config;

class FormData extends Component
{
    public $term_name= null;
    public $term_accepeted = '';
    public $nome = null;
    public $telefone = null;

    public $toast_type = ['success' => 0,'info' => 1,'warning' => 2,'error' => 3];
    public $msg_toast = [
        "title" => '',
        "information" => '',
        "type" => 1,
        "time" => Config::TIME_TOAST
    ];

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
        $this->validate();
        try{
            $configuracao = Configuracao::find(1);
            if(Registro::count() >= $configuracao->limite_registros){
                $this->msg_toast['title'] = 'Atenção!';
                $this->msg_toast['information'] = "O limite diário já foi alcançado! \n <br> Tente novamente outro dia!";
                $this->msg_toast['type'] = $this->toast_type['warning'];
                $this->emit('footer_showToast', $this->msg_toast);
            }else{
                Registro::create([
                    'nome' => mb_strtoupper($this->nome),
                    'telefone' => $this->telefone
                ]);
                //verficar se limite foi alcançado apos o ultimo cadastro
                $result = Registro::isLimitRegister();
                if($result){
                    Disponibilidade::where('id', 1)->update([
                        'disponivel_status' => 'nao'
                    ]);
                    $this->msg_toast['title'] = 'Atenção!';
                    $this->msg_toast['information'] = "O limite diário acaba de ser atingido após esse envio! \n <br> Não tranfira mais pix, pois o seu registro não ficara salvo no sistema!";
                    $this->msg_toast['type'] = $this->toast_type['warning'];
                    $this->msg_toast['time'] = 15000;
                    $this->emit('components.home.form-data_showToast', $this->msg_toast);
                }else{
                    Disponibilidade::where('id', 1)->update([
                        'disponivel_status' => 'sim'
                    ]);
                }
                $this->reset(['nome', 'telefone','term_accepeted']);
                $this->msg_toast['title'] = 'Sucesso!';
                $this->msg_toast['information'] = "Seu registro foi enviado com sucesso! \n <br> Aguarde a nosso contato!";
                $this->msg_toast['type'] = $this->toast_type['success'];
                $this->msg_toast['time'] = Config::TIME_TOAST;
                $this->emit('footer_showToast', $this->msg_toast);
            }

        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.components.home.form-data');
    }
}
