<?php

use Illuminate\Support\Facades\Route;
use App\Produto;
use App\Categoria;

/*
|--------------------------------------------------------------------------
| Rotas da Web
| Aqui é onde você pode registrar rotas da web para sua aplicação. Essas
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo incrível!
|--------------------------------------------------------------------------
*/

// Rota para listar todas as categorias
Route::get('/categorias', function () {
    // Recupera todas as categorias do banco de dados
    $cats = Categoria::all();

    // Verifica se não existem categorias cadastradas
    if (count($cats) === 0) {
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    } else {
        // Exibe as informações de cada categoria
        foreach ($cats as $c) {
            echo "<p>{$c->id} - {$c->nome}</p>";
        }
    }
});

// Rota para listar todos os produtos
Route::get('/produtos', function () {
    // Recupera todos os produtos do banco de dados
    $prods = Produto::all();

    // Verifica se não existem produtos cadastrados
    if (count($prods) === 0) {
        echo "<h4>Você não possui nenhum produto cadastrado</h4>";
    } else {
        // Exibe uma tabela com as informações de cada produto
        echo "<table>";
        echo "<thead><tr><td>Nome</td><td>Estoque</td><td>Preço</td><td>Categoria</td></tr></thead>";
        foreach ($prods as $p) {
            echo "<tr>";
            echo "<td>{$p->nome}</td>";
            echo "<td>{$p->estoque}</td>";
            echo "<td>{$p->preco}</td>";

            // Verifica se a categoria está associada ao produto antes de acessar 'nome'
            if ($p->categoria) {
                echo "<td>{$p->categoria->nome}</td>";
            } else {
                echo "<td>Sem categoria</td>";
            }

            echo "</tr>";
        }
        echo "</table>";
    }
});

// Rota para listar categorias e seus respectivos produtos
Route::get('/categoriasprodutos', function () {
    // Recupera todas as categorias do banco de dados
    $cats = Categoria::all();
    
    // Verifica se não existem categorias cadastradas
    if (count($cats) === 0) {
        echo "<h4>Você não possui nenhuma categoria cadastrada</h4>";
    } else {
        // Exibe as informações de cada categoria e seus produtos associados
        foreach ($cats as $c) {
            echo "<p>{$c->id} - {$c->nome}</p>";

            // Recupera os produtos associados à categoria
            $produtos = $c->produtos;

            // Verifica se existem produtos associados à categoria
            if ($produtos !== null && count($produtos) > 0) {
                echo "<ul>";
                foreach ($produtos as $p) {
                    echo "<li>{$p->nome}</li>";
                }
                echo "</ul>";
            }
        }
    }
});

// Rota para listar categorias e seus respectivos produtos em formato JSON
Route::get('/categoriasprodutos/json', function () {
    // Recupera todas as categorias com os produtos associados
    $cats = Categoria::with('produtos')->get();
    
    // Retorna os dados no formato JSON
    return $cats->toJson();
});

// Rota para associar um produto a uma categoria específica
Route::get('/adicionarproduto/{catid}', function ($catid) {
    // Recupera a categoria com os produtos associados
    $cat = Categoria::with('produtos')->find($catid);

    // Cria um novo produto
    $p = new Produto();
    $p->nome = "Meu novo Produto adicionado";
    $p->estoque = 30;
    $p->preco = 400;

    // Verifica se a categoria existe
    if (isset($cat)) {
        // Associa o produto à categoria
        $cat->produtos()->save($p);
    }

    // Recarrega a relação para exibir os produtos atualizados
    $cat->load('produtos');

    // Retorna os dados da categoria no formato JSON
    return $cat->toJson();
});
