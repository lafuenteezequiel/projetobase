<?php
namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;
class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('created_at', 'desc')->paginate(10);
        return view('produtos.index',['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $product = new Produto;
        $product->nome        = $request->nome;
        $product->descricao   = $request->descricao;
        $product->quantidade  = $request->quantidade;
        $product->preco       = $request->preco;
        $product->save();
        return redirect()->route('produtos.index');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.editar',compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $product = Produto::findOrFail($id);
        $product->name        = $request->nome;
        $product->description = $request->descricao;
        $product->quantity    = $request->quantidade;
        $product->price       = $request->preco;
        $product->save();
        return redirect()->route('produtos.index')->with('message', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $product = Produto::findOrFail($id);
        $product->delete();
        return redirect()->route('produtos.index');
    }
}