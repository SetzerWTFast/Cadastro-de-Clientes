<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Cliente;

class ClienteController extends Controller
{
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {

        $title = 'Clientes Cadastrados';
        $cliente = $this->cliente->all();
        return view('painel.clientes.index', compact('cliente', 'title'));
    }

    public function tests()
    {
        /*$insert = $this->cliente->insert([
        'nome'          => 'Nome novo de cliente',
        'cpf'           => '12345678901',
        'endereco'      => 'novo endereco de cliente',
        'numero'        =>'12345',
        'complemento'   => 'novo complemeto do cliente',
        'cep'           => '18070555',
        'cidade'        => 'nova cidade do cliente',
        'estado'        => 'novo estado do cliente',
        'telefone'      => '15789456321',
        ]);

        if ( $insert )
            return 'inserido com sucesso';
        else
            return 'deu ruim o cadastro';
**/
        /*
        $clie = $this->cliente;
        $clie->id = 8;
        $clie->nome = 'Nome novo de cliente';
        $clie->cpf = '12345678901';
        $clie->endereco = 'novo endereco de cliente';
        $clie->numero ='12345';
        $clie->complemento = 'novo complemeto do cliente';
        $clie->cep = '18070555';
        $clie->cidade = 'nova cidade do cliente';
        $clie->estado = 'novo estado do cliente';
        $clie->telefone = '15789456321';

        $insert = $clie->save();

        if ( $insert )
            return 'inserido com sucesso';
        else
            return 'deu ruim o cadastro';
**/

        //return 'tests';

        
        /*$update = $this->cliente
                        ->where('numero',20)
                        ->update([
            'nome'          => 'erro novo',
            'cpf'           => '987654321',
            'endereco'      => 'novo endereco de update',
            'numero'        =>'12345',
            'complemento'   => 'novo complemeto do update',
            'cep'           => '18070555',
            'cidade'        => 'nova cidade do update',
            'estado'        => 'novo estado do update ',
            'telefone'      => '15789456321',
        ]);

        if ( $update )
            return 'atualizado com sucesso';
        else
            return 'deu ruim atualizacao';**/

            $delete = $this->cliente
            ->where('cpf', 14141414)->delete();

            if ( $delete )
                return 'cadastro deletado do banco de dados';
            else
                return 'falha ao deletar do banco de dados';

    }

    public function create()
    {
        $title = 'Cadastro de Clientes';
        return view('painel.clientes.create', compact('title'));
        
    
    }

    public function store(Request $request)
    {
        $dataForm = $request->except('_token');

        $this->validate($request, $this->cliente->rules);

        $insert = $this->cliente->insert($dataForm);

        if ( $insert )
            return redirect()->route('clientes.index');
        else
            return redirect()->route('clientes.create');
    }

}
