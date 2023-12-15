<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(['nome' => 'Camiseta Polo', 'preco'=>100, 'estoque'=> 4, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome' => 'Calça Jeans', 'preco'=>120, 'estoque'=> 1, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome' => 'Camisa Manga longa', 'preco'=>34, 'estoque'=> 4, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome' => 'Camiseta Polo', 'preco'=>56, 'estoque'=> 2, 'categoria_id'=>1]);
        DB::table('produtos')->insert(['nome' => 'Pc Game', 'preco'=>37, 'estoque'=> 5, 'categoria_id'=>2]);
        DB::table('produtos')->insert(['nome' => 'Impressora', 'preco'=>100, 'estoque'=> 4, 'categoria_id'=>6]);
        DB::table('produtos')->insert(['nome' => 'Mouse', 'preco'=>37, 'estoque'=> 6, 'categoria_id'=>6]);
        DB::table('produtos')->insert(['nome' => 'Perfume', 'preco'=>55, 'estoque'=> 7, 'categoria_id'=>3]);
        DB::table('produtos')->insert(['nome' => 'Cama de casal', 'preco'=>11, 'estoque'=> 8, 'categoria_id'=>4]);
        DB::table('produtos')->insert(['nome' => 'Móveis', 'preco'=>11, 'estoque'=> 8, 'categoria_id'=>4]);

    }
    /*
            Segunda forma de executar o run  

    $produtos = [
        ['nome' => 'Camiseta Polo', 'preco' => 100, 'estoque' => 4, 'categoria_id' => 1],
        ['nome' => 'Calça Jeans', 'preco' => 120, 'estoque' => 1, 'categoria_id' => 1],
        ['nome' => 'Camisa Manga longa', 'preco' => 34, 'estoque' => 4, 'categoria_id' => 1],
        ['nome' => 'Camiseta Polo', 'preco' => 56, 'estoque' => 2, 'categoria_id' => 1],
        ['nome' => 'Pc Game', 'preco' => 37, 'estoque' => 5, 'categoria_id' => 2],
        ['nome' => 'Impressora', 'preco' => 100, 'estoque' => 4, 'categoria_id' => 6],
        ['nome' => 'Mouse', 'preco' => 37, 'estoque' => 6, 'categoria_id' => 6],
        ['nome' => 'Perfume', 'preco' => 55, 'estoque' => 7, 'categoria_id' => 3],
        ['nome' => 'Cama de casal', 'preco' => 11, 'estoque' => 8, 'categoria_id' => 4],
        ['nome' => 'Móveis', 'preco' => 11, 'estoque' => 8, 'categoria_id' => 4],
    ];

    DB::table('produtos')->insert($produtos);*/
}
