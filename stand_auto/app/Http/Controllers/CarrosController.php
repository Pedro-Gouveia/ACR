<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosController extends Controller
{

    private $arrayCarros = [
        ["id" => 1, "marca" => "VW", "modelo" => "Polo", "img" => " ", "preco" => 1000],
        ["id" => 2, "marca" => "Ferrari", "modelo" => "LaFerrari", "img" => " ", "preco" => 600000],
        ["id" => 3, "marca" => "Nissan", "modelo" => "Skyline", "img" => " ", "preco" => 400000],
        ["id" => 4, "marca" => "Toyota", "modelo" => "Supra", "img" => " ", "preco" => 250000]
    ];

    public function index()
    {
        return view('carros', ['carros' => $this->arrayCarros]);
    }

    public function show($id)
    {
        $carroSelectionado = NULL;
        foreach ($this->arrayCarros as $linhaCarro) {
            if ($linhaCarro['id'] == $id) {
                $carroSelectionado = $linhaCarro;
            }
        }

        return view('detalhes', ['carro' => $carroSelectionado]);
    }
}
