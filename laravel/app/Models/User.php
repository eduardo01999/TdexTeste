<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['cnpj', 'razao_social', 'endereco', 'numero', 'complemento', 'bairro', 'cep', 'telefone', 'email', 'password'];

    protected $table='empresa';
}
