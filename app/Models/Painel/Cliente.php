<?php
namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //depois pesquisar sobre o timestamps pra q serve mas arrumou o erro:
    //SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list'
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'numero',
        'complemento',
        'cep',
        'cidade',
        'estado',
        'telefone',
    ];

    public $rules = [
        'nome' => 'required|min:3|max:240',
        'cpf' => 'required|numeric',
        'endereco' => 'required',
    ];
}
