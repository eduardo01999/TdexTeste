<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVeiculo extends Model
{
    use HasFactory;

    protected $fillable = ['chassi', 'placa', 'renavam', 'marca', 'valor_compra', 'empresa_id'];

    protected $table='veiculo';

    public function relEmpresa() 
    {
        return $this->hasOne('App\Models\ModelEmpresa', 'id', 'empresa_id');
    }

    public function relMultas() 
    {
        return $this->hasMany('App\Models\ModelMulta', 'veiculo_id');
    }
}
