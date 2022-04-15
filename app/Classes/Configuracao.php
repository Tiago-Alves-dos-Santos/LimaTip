<?php
namespace App\Classes;
class Configuracao
{
    /******************plugins********************/
    //toast
    const TIME_TOAST = 10000;


    /*************** arquivos *****************/
    const CONFIG_DOCUMENT_STORAGE = 'public/document/config/';
    const CONFIG_TERM_STORAGE = 'public/document/config/';

    //usado em conjunto com jquery mask com formato money
    //formato ',' para deciamais '.' para centenas, milhares etc
    public static function convertToMoney($money)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        return str_replace($source ,$replace,$money);
    }

    //ao pegar valor do banco ele pode vir meio bugado em um campo com jquewry mask
    //configurado para money
    public static function getDbMoney($money)
    {
        return number_format($money, 2 ,',','.');
    }
}
