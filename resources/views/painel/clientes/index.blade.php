@extends('painel.templates.template')

@section('content')

<h1 align="center" class="title-pg">Clientes Cadastrados</h1>

<a href="{{route('clientes.create')}}" class=" fields btn btn-primary btn-add">Cadastrar</a>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>CEP</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Telefone</th>
    </tr>

    @foreach ($cliente as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->endereco}}</td>
            <td>{{$cliente->numero}}</td>
            <td>{{$cliente->omplemento}}</td>
            <td>{{$cliente->cep}}</td>
            <td>{{$cliente->cidade}}</td>
            <td>{{$cliente->estado}}</td>
            <td>{{$cliente->telefone}}</td>
        </tr>
    @endforeach

</table>

@endsection