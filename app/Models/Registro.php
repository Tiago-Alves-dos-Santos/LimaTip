<?php

namespace App\Models;

use App\Models\Configuracao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registro extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'registros';
    protected $guarded = [];


    /**
     * [Description for isLimitRegister]
     *  Verificar se é o limite foi alcançado
     * @return [bool]
     *
     */
    public static function isLimitRegister()
    {
        $total = Registro::count();
        $limite = Configuracao::find(1)->limite_registros;
        if($total >= $limite){
            return true;
        }else{
            return false;
        }
    }
}
