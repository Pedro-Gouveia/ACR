<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use App\Models\Componente_tipo;
use Illuminate\Http\Request;
use App\Http\Requests\NewComponenteRequest;

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

    public function componentes_por_tipo($id){
        $tipos = Componente_tipo::all();
        $tipo = Componente_tipo::findOrFail($id);
        $componentes = $tipo->componentes;

        return view('componentes', ['componentes' => $componentes, 'tipos' => $tipos, 'actTipo' => $id]);
    }

    public function create(){

        $tipos = Componente_tipo::all();
        return view ('createComponente', ['tipos' => $tipos]);
    }

    public function edit($id){

        $tipos = Componente_tipo::all();
        $componente = Componente::findOrFail($id);
        return view ('createComponente', ['componente' => $componente, 'tipos' => $tipos]);
    }

    public function store(NewComponenteRequest $request){

        $nome = request('nome');
        $desc = request('desc');
        $img = request('img');
        $preco = request('preco');
        $tipo = request('tipo');

        $img = "";
        if ($request->has('img')){
            $image = $request->file('img');

            $imageName = 'comp'.'_'.time();
            $folder = 'img/componentes/';
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
        $componente->componente_tipo_id = $tipo;
        $componente->created_by = auth()->user()->id;

        $componente->save();

        return redirect('/componentes/create')->with('msg', 'Componente Criado');

    }

    public function destroy($id){
        $componente = Componente::findOrFail($id);
        $componente->delete();

        return redirect('/componentes');
    }
}
