<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEmpresa extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj', 'razao_social', 'endereco', 'numero', 'complemento', 'bairro', 'cep', 'telefone', 'email', 'password'];

    protected $table='empresa';

    public function relVeiculos() 
    {
        return $this->hasMany('App\Models\ModelVeiculo', 'empresa_id');
    }
}
