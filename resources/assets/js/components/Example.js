import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
        
      
      <section className="content">
        <div className="cadastro">

            <form className="form" method="POST" action="database\seeds\ClientesTableSeeder.php">

            <h3>Formulário de Cadastro</h3>

            <input className="field" name="nome" placeholder="Nome Completo"></input>
            <input className="field" name="cpf" placeholder="CPF"></input>
            <input className="field" name="endereco" placeholder="Endereço Completo"></input>
            <input className="field" name="numero" placeholder="Número"></input>
            <input className="field" name="complemento" placeholder="Complemento"></input>
            <input className="field" name="cep" placeholder="CEP"></input>
            <input className="field" name="cidade" placeholder="Cidade"></input>
            <input className="field" name="estado" placeholder="Estado"></input>
            <input className="field" name="telefone" placeholder="Telefone para Contato"></input>
            
            <input className="field" type="submit" value="Salvar Dados"></input>

            </form>
        </div>
      </section>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
