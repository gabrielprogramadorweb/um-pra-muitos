<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lógica para inserção de dados na tabela.
        DB::table('categorias')->insert(['nome' => 'Roupas']);
        DB::table('categorias')->insert(['nome' => 'Eletronicos']);
        DB::table('categorias')->insert(['nome' => 'Perfumes']);
        DB::table('categorias')->insert(['nome' => 'Móveis']);
        DB::table('categorias')->insert(['nome' => 'Alimentos']);
        DB::table('categorias')->insert(['nome' => 'Informatica']);

    }
}
