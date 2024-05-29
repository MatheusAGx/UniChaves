<?php 
    include "../config/header/header.php";
    include "../config/sidemenu/sidemenu.php";

?>
    <div class="container-fluid">
            
            
      <div class="card">
        <div class="card-body">
          <a href="./adicionar" class="btn btn-primary">Adicionar</a>
        </div>
      </div>

    
      <?php while($usuario = $busca_usuario->fetch_object()) { ?>
      <div class="card card-hover">
        <div class="card-body">
            <div class="col-12 col-sm-12">
              <h6></h6>
              <div>Dados:</div>
            </div>
        </div>
      </div>
      <?php } ?>
    
    </div>

<?php 
    include "../config/footer/footer.php"; 
?>