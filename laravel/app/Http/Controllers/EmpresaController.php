<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelEmpresa;
use App\Models\ModelVeiculo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmpresaController extends Controller
{

    private $objBook;
    private $objVeiculo;

    public function __construct()
    {
        $this->objVeiculo=new ModelVeiculo();
        $this->objBook=new ModelEmpresa();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->objBook->create([
            'cnpj'=>$request->cnpj,
            'razao_social'=>$request->razao_social,
            'endereco'=>$request->endereco,
            'numero'=>$request->numero,
            'complemento'=>$request->complemento,
            'bairro'=>$request->bairro,
            'cep'=>$request->cep,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'password'=>$request->password
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
        $empresa=$this->objBook->find($id);

        return view('empresaPerfil',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->objBook->where(['id'=>$id])->update([
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'numero'=>$request->numero,
            'complemento'=>$request->complemento,
            'bairro'=>$request->bairro,
            'cep'=>$request->cep,
        ]);
        $veiculo=$this->objVeiculo->all();
        return view("home",compact('veiculo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function auth(Request $request) 
    {

        $veiculo=$this->objVeiculo->all();

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $empresa = User::where('email',$request->email)->where('password',$request->password)->first();

        Auth::loginUsingId($empresa->id);
        return view("home",compact('veiculo'));
    }
}
