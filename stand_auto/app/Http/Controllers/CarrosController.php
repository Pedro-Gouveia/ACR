<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarrosController extends Controller
{


    public function index()
    {
        $carros = Car::all();
        return view('carros', ['carros' => $carros]);
    }

    public function show($id)
    {
        $carro = Car::findOrFail($id);

        return view('detalhes', ['carro' => $carro]);
    }

    public function create(){
        return view('createCar');
    }

    public function store(){
        $marca = request('marca');
        $modelo = request('modelo');
        $preco = request('preco');

        $carro = new Car();

        $carro->marca = $marca;
        $carro->modelo = $modelo;
        $carro->preco = $preco;

        $carro->save();

        return redirect('/carros/create')->with('mssg', 'Carro Adicionado!');
    }

    public function destroy($id){
        $carro = Car::findOrFail($id);
        $carro->delete();

        return redirect('/carros');
    }
}
