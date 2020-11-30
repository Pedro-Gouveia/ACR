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

    public function create(){
        return view('createProduct');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $name = request('name');
        $desc = request('desc');
        $url = request('url');
        $preco = request('preco');

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

        $produto->save();

        return redirect('/produtos/create')->with('mssg', 'Produto Criado');
    }

    public function destroy($id){
        $produto = Product::findOrFail($id);
        $produto->delete();

        return redirect('/produtos');
    }

}
