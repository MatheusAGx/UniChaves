<?php 
    include "../config/header/header.php";
    include "../config/sidemenu/sidemenu.php";
?>
<div class="container" style="text-align: center;">
    <img src="../uploads/images/chave.png" class="img-fluid p-3" alt="chave desenho" width="35%" height="42%">
    <form method="POST" action="#" name="login_form" id="login_form">
        <div class="col-12 w-50" style="text-align: left; margin: auto">
            <h6>CPF:</h6>
            <input class="form-control" type="text" name="username" id="username">
        </div>
        <div class="col-12 w-50" style="text-align: left; margin: auto">
            <h6>Senha:</h6>
            <input class="form-control" type="password" name="senha" id="senha">
        </div>
        <button type="submit" class="btn btn-primary my-4" name="acessar" id="acessar">Acessar</button>
    </form>
</div>
<?php 
    include "../config/footer/footer.php"; 
?>