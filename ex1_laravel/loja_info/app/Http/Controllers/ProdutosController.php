<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Product::all();
        return view('produtos', ['produto' => $produtos]);
    }

    public function show($id){
        $produto = Product::findorFail($id);
        return view('detalhes', ['produto' => $produto]);
    }

    public function produtosPorTipo($id){
        $tipos = tipo_produto::all();
        $tipo = tipo_produto::findOrFail($id);
        $produtos = $tipo->products;
        return view('produtos', ['produtos' => $produtos, 'tipos' => $tipos, 'actTipo' => $id]);
    }

    public function create(){

        $tipos = tipo_produto::all();
        return view('createProduct', ['tipos' => $tipos]);
    }

    public function store(NewProductRequest $request){

        $name = request('name');
        $desc = request('desc');
        $url = request('url');
        $preco = request('preco');
        $tipo = request('tipoProduto');

        $url = "";
        if ($request->has('url')){
            $image = $request->file('url');

            $iname = 'prod' . '_' . time();
            $folder = '/img/produtos/';
            $fileName = $iname . '.' . $image->getClientOriginalExtension();
            $filePath = $folder . $fileName;

            $image->storeAs($folder, $fileName, 'public');
            $url = "/storage" . $filePath;
        }

        $produto = new Product();

        $produto->nome = $name;
        $produto->desc = $desc;
        $produto->url = $url;
        $produto->preco = $preco;
        $produto->tipo_produto_id = $tipo;

        $produto->save();

        return redirect('/produtos/create')->with('mssg', 'Produto Criado');
    }

    public function destroy($id){
        $produto = Product::findOrFail($id);
        $produto->delete();

        return redirect('/produtos');
    }

}
