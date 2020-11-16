<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $arrayProdutos = [
        ["id" => 1, "nome" => "PC Gamer", "desc" => "PC Gamer Top", "img" => "/img/produtos/1.jpg", "preco" => 1000 ],
        ["id" => 2, "nome" => "PC Workstation", "desc" => "PC para trabalho", "img" => "/img/produtos/2.jpg", "preco" => 600 ],
        ["id" => 3, "nome" => "PC Bonzinho", "desc" => "PC Bonzinho, desenrasca", "img" => "/img/produtos/3.jpg", "preco" => 400 ],
        ["id" => 4, "nome" => "PC Rasca", "desc" => "PC mesmo muito fraco", "img" => "/img/produtos/4.jpg", "preco" => 250 ]
    ];

    public function index(){
        return view('produtos', ['produtos' => $this->arrayProdutos]);
    }

    public function show($id){
        $produtoSelectionado = NULL;
        foreach($this->arrayProdutos as $linhaProduto){
            if($linhaProduto['id'] == $id){
                $produtoSelectionado = $linhaProduto;
        }
    }

    return view('detalhes', ['produto' => $produtoSelectionado]);

    }
}
