<?php

namespace App\Http\Controllers;

use App\Models\ModelEmpresa;
use App\Models\ModelMulta;
use Illuminate\Http\Request;
use App\Models\ModelVeiculo;

class VeiculoController extends Controller
{

    private $objVeiculo;
    private $objMulta;

    public function __construct()
    {
        $this->objVeiculo=new ModelVeiculo();
        $this->objMulta=new ModelMulta();
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
        return view('veiculoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->objVeiculo->create([
            'chassi'=>$request->chassi,
            'placa'=>$request->placa,
            'renavam'=>$request->renavam,
            'marca'=>$request->marca,
            'valor_compra'=>$request->valor_compra,
            'empresa_id'=>$request->empresa_id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veiculo=$this->objVeiculo->find($id);
        return view("veiculoExibe",compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $veiculo=$this->objVeiculo->find($id);

        return view('veiculoCreate',compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->objVeiculo->where(['id'=>$id])->update([
            'chassi'=>$request->chassi,
            'placa'=>$request->placa,
            'renavam'=>$request->renavam,
            'marca'=>$request->marca,
            'valor_compra'=>$request->valor_compra
        ]);
        $veiculo=$this->objVeiculo->all();
        return view("home",compact('veiculo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        VeiculoController::destroy($id);
        return redirect()->action([VeiculoController::class, "home"])
                ->with("resposta", "Registro excluído");
    }
}
