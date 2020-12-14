<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
    public function index()
    {
        $componentes = Componente::all();
        return view('componentes', ['componentes' => $componentes]);
    }

    public function show($id)
    {
        $componente = Componente::findOrFail($id);
        return view('detalhes', ['componente' => $componente]);
    }

    public function create(){
        return view ('createComponente');
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'nome' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png|max2048'
        ]);

        $nome = request('nome');
        $desc = request('desc');
        $img = request('img');
        $preco = request('preco');

        $img = "";
        if ($request->has('img')){
            $image = $request->file('img');

            $imageName = 'comp'.'_'.time();
            $folder = '/img/produtos/';
            $fileName = $imageName.'.'.$image->getClientOriginalExtension();
            $filePath = $folder.$fileName;

            $image->storeAs($folder, $fileName, 'public');
            $img = "/storage/".$filePath;
        }

        $componente = new Componente();

        $componente->nome = $nome;
        $componente->desc = $desc;
        $componente->img = $img;
        $componente->preco = $preco;

        $componente->save();

        return redirect('/componentes/create')->with('msg', 'Componente Criado');

    }

    public function destroy($id){
        $componente = Componente::findOrFail($id);
        $componente->delete();

        return redirect('/componentes');
    }
}
