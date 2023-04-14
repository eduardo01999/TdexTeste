<?php

namespace App\Http\Controllers;

use App\Models\ModelMulta;
use App\Models\ModelVeiculo;
use Illuminate\Http\Request;

class MultaController extends Controller
{

    private $objMulta;
    private $objVeiculo;

    public function __construct()
    {
        $this->objMulta=new ModelMulta();
        $this->objVeiculo=new ModelVeiculo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $veiculo=$this->objVeiculo->all();
        return view('multaCreate',compact('veiculo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->objMulta->create([
            'descricao'=>$request->descricao,
            'orgao'=>$request->orgao,
            'valor'=>$request->valor,
            'veiculo_id'=>$request->veiculo_id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $multa=$this->objMulta->find($id);

        return view('multaCreate',compact('multa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->objMulta->where(['id'=>$id])->update([
            'descricao'=>$request->descricao,
            'orgao'=>$request->orgao,
            'valor'=>$request->valor,
            'quitacao'=>$request->quitacao,
            'quitacao_hora'=>$request->quitacao_hora
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MultaController::destroy($id);
        return redirect()->action([MultaController::class, "home"])
                ->with("resposta", "Registro excluído");
    }
}
