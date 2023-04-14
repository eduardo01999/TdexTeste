<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMulta extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'orgao', 'valor', 'quitacao','quitacao_hora', 'veiculo_id'];

    protected $table='multa';

    public function relVeiculo() 
    {
        return $this->hasOne('App\Models\ModelVeiculo', 'id', 'veiculo_id');
    }
    
}
