<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProdutosResource;
use App\Http\Resources\ProdutosCollection;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    public function index(){
        //$all = $this->produto->count();
        //$produtos = $this->produto->simplePaginate($all);

        //return response()->json(['data' => $produtos]);

        //return new ProdutosCollection($produtos);

        $tradicional = 1;
        $tops = 2;
        $doces = 3;
        $refris = 6;
        $adc = 4;
        $borda = 5;

        $p_tradicional = DB::table('produtos')->where('id_categoria', $tradicional)->get();
        $p_tops = DB::table('produtos')->where('id_categoria', $tops)->get();
        $p_doces = DB::table('produtos')->where('id_categoria', $doces)->get();
        $p_refris = DB::table('produtos')->where('id_categoria', $refris)->get();
        $p_adc = DB::table('produtos')->where('id_categoria', $adc)->get();
        $p_borda = DB::table('produtos')->where('id_categoria', $borda)->get();
        

        $produtos = DB::table('produtos')->paginate(5);

        return view('welcome', [
            'produtos' => $produtos,
            'p_tradicional' => $p_tradicional,
            'p_tops' =>  $p_tops,
            'p_doces' =>  $p_doces,
            'p_refris' =>  $p_refris,
            'p_adc' =>  $p_adc,
            'p_borda' =>  $p_borda
            ]);
    }

    public function show($id){
        $produto = $this->produto->find($id);

        //return response()->json(['data' => [$produto]]);

        return new ProdutosResource($produto);   
    }

    public function update(Request $request, $id){
        $data = $request->all();
        
        $produto = $this->produto->find($id);

        $produto->update($data);

        return response()->json(['data' => ['msg' => 'Produto atualizado!']]);
    }

}
