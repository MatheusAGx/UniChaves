<?php 
    include "../../config/header/header.php";
    include "../../config/sidemenu/sidemenu.php";

?>
<div class="card">
    <div class="card-body">
        <a href="../" class="btn btn-primary">Voltar</a>
    </div>
</div>
<div class="card" style="width: full;">
  
    <div class="card-body">
        <h3 class="card-title">Cadastro de Usúário</h3>
        <div class="row p-2" >
            <div class="col-6">
                <h6>Nome: </h6>
                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome" aria-label="Nome">
            </div>
            <div class="col-6">
                <h6>Sobrenome: </h6>
                <input id="sobrenome" name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" aria-label="Sobrenome">
            </div>
        </div>
        <div class="row p-2">
            <div class="col-6">
                <h6>Senha: </h6>
                <input type="text" class="form-control" placeholder="Senha (mínimo 8 e maximo 45 caracteres)" aria-label="Senha">
            </div>
            <div class="col-6">
                <h6>Confirme sua senha: </h6>
                <input id="senha" name="senha" type="text" class="form-control" placeholder="Confirme sua senha" aria-label="Sobrenome">
            </div>
        </div>
        <br>
        <div class="row p-2" >
            <div class="col-6">
                <h6>CPF: </h6>
                <input id="cpf" name="cpf" type="text" class="form-control" placeholder="CPF (sem pontos, sem barra)" aria-label="CPF">
            </div>
                
            <div class="col-6">
                <h6>CNPJ: </h6>
                <input id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ (sem pontos, sem barra)" aria-label="CNPJ">
            </div>
        </div>
        <br>
        <div class="row p-2" >
            <div class="col-6">
                <h6>E-mail: </h6>
                <input id="email" name="email" type="text" class="form-control" placeholder="E-mail" aria-label="E-mail">
            </div>
        
            <div class="col-3">
                <h6>Telefone(Celular): </h6>
                <input id="tel1" name="tel1"type="text" class="form-control" placeholder="(01) 2 3456-7890" aria-label="(01) 2 3456-7890">
            </div>
            <div class="col-3">
                <h6>Telefone (Fixo ou Celular 2) </h6>
                <input id="tel2" name="tel2" type="text" class="form-control" placeholder="(01) 2 3456-7890" aria-label="(01) 2 3456-7890">
            </div>
        </div>
        <br>
        <div class="row p-2">
            <h4>Endereço</h4>
            <div class="col-2">
                <h6>CEP</h6>
                <input id="cep" name="cep" type="text" class="form-control" placeholder="CEP sem ponto e sem traço" aria-label="CEP">
            </div>
            <div class="col-8">
                <h6>Lagradouro</h6>
                <input id="lagradouro" name="lagradouro" type="text" class="form-control" placeholder="Rua ou Avenida" aria-label="Lagradouro">
            </div>
            <div class="col-2">
                <h6>Número</h6>
                <input id="numero_casa" name="numero_casa" type="text" class="form-control" placeholder="Número da casa" aria-label="Número da casa">
            </div>
        </div>
        <div class="row p-2">
            <div class="col-2">
                <h6>Bairro</h6>
                <input id="bairro" name="bairro" type="text" class="form-control" placeholder="Bairro" aria-label="Bairro">
            </div>
            <div class="col-2">
                <h6>CEP</h6>
                <input id="cep" name="cep" type="text" class="form-control" placeholder="CEP sem ponto e sem traço" aria-label="CEP">
            </div>
            
            <div class="col-4">
                <h6>Complemento</h6>
                <input id="complemento" name="complemento" type="text" class="form-control" placeholder="Complemento do endereço" aria-label="Complemento do endereço">
            </div>
            <div class="col-3">
                <h6>Cidade</h6>
                <input id="cidade" name="cidade" type="text" class="form-control" placeholder="Cidade" aria-label="Cidade">
            </div>
            <div class="col-1">
                <h6>Estado</h6>
                <input id="uf" name="uf" type="text" class="form-control" placeholder="Sigla" aria-label="Estado">
            </div>
        </div>
            
        <a href="#" class="btn btn-primary ">Cadastrar</a>
    </div>
</div>


<?php 
    include "../../config/footer/footer.php"; 
?>