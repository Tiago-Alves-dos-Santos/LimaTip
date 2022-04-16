<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disponibilidade extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'disponibilidades';
    protected $guarded = [];

    public static function verifyDisponibility($data_disponibilidade)
    {
        $now = date('Y-m-d');
        $now_time = date('H:i:s');
        $db_date = date('Y-m-d', strtotime($data_disponibilidade));
        $db_date_time = date('H:i:s', strtotime($data_disponibilidade));
        //dd($now_time." *** ".$db_date_time);
        // Comparando as Datas
        if(strtotime($now) > strtotime($db_date)){//'A data 1 é maior que a data 2.'
            return 'nao';
        }else if(strtotime($now) == strtotime($db_date) && strtotime($now_time) >= strtotime($db_date_time)){
            return 'nao';
        }
        else{//A data 1 é menor a data 2.
            return  'sim';
        }
    }
}
