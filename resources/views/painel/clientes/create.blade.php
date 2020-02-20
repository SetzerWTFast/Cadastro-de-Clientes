@extends('painel.templates.template')

@section('content')

<header>
<section class="contents">
    <div class="cadastros">

        <h3>Formulário de Cadastro</h3>

        @if(isset($errors)  && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif

    <form class="forms" method="POST" action="{{route('clientes.store')}}">

        {!! csrf_field() !!}
        <input class="fields" name="nome" placeholder="Nome Completo">
        <input class="fields" name="cpf" placeholder="CPF">
        <input class="fields" name="endereco" placeholder="Endereço Completo">
        <input class="fields" name="numero" placeholder="Número">
        <input class="fields" name="complemento" placeholder="Complemento">
        <input class="fields" name="cep" placeholder="CEP">
        <input class="fields" name="cidade" placeholder="Cidade">
        <input class="fields" name="estado" placeholder="Estado">
        <input class="fields" name="telefone" placeholder="Telefone para Contato">
        
        <input class="fields btn btn-primary" type="submit" value="Salvar Dados">
        <a href="{{route('clientes.index')}}" class="fields btn btn-primary">Clientes Cadastrados</a>

        </form>
    </div>
  </section>
</header>
@endsection
