<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // função para retornar os dados da tabela para vareavel através da função belongsTo
    function categoria(){
         return $this->belongsTo('App\Categoria');
    }
   
}
