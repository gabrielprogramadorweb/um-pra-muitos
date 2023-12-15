<?php
    


namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // ...

    // Defina a relação "produtos" no modelo Categoria
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoria_id');
    }
}
