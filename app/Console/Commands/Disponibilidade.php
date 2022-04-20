<?php

namespace App\Console\Commands;

use App\Models\Registro;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\Disponibilidade as DisponibilidadeModel;

class Disponibilidade extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rotina:disponibilidade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rotina para verficar a disponibilidade de cadastro registro e data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $result = Registro::isLimitRegister();
        if(!$result){
            DisponibilidadeModel::where('id', 1)->update([
                'disponivel_status' => 'sim'
            ]);
            //verfica a data, se esta dentro do prazo para ser disponivel
            $disponibilidade = DisponibilidadeModel::find(1);
            $result = DisponibilidadeModel::verifyDisponibility($disponibilidade->disponibilidade);
            if($result == 'sim'){
                DisponibilidadeModel::where('id', 1)->update([
                    'disponivel_status' => 'sim'
                ]);
            }else{
                DisponibilidadeModel::where('id', 1)->update([
                    'disponivel_status' => 'nao'
                ]);
            }
        }else{
            DisponibilidadeModel::where('id', 1)->update([
                'disponivel_status' => 'nao'
            ]);
        }

    }
}
