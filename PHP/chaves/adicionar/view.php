<<<<<<< HEAD
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
        <h3 class="card-title">Cadastro de Chaves</h3>
        <form action="#" method="post" id="reg_chave" name="reg_chave" enctype="multipart/form-data">
            <div class="row p-2" >
                <div class="col-6">
                    <h6>Nome: </h6>
                    <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome" aria-label="Nome" required>
                </div>
                <div class="col-6">
                    <h6>Instituicao </h6>
                    <select name="instituicao" id="instituicao" class="form-control">
                        <option value="1">Unicamp - FT</option>
                        <option value="2">Unicamp - FCA</option>
                        <option value="3">Cotil</option>
                        <option value="4">Portaria</option>
                    </select>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-12">
                    <h6>Descrição: </h6>
                    <textarea class="form-control" aria-label="Descricao" name="descricao" rows="3" cols="50"></textarea>
                </div>
            </div>
                
            <button class="btn btn-primary" name="cadastrar" value="cadastrar">Cadastrar</a>
        </form>
        
    </div>
</div>


<?php 
    include "../../config/footer/footer.php"; 
?>