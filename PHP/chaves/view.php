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

  <?php foreach ($pagination['results'] as $chave): ?>

      <div class="card card-hover my-2">
      <div class="card-header" style="align-items: center;">
          <strong><?= $chave['nome'] ?></strong>
          <a class="btn btn-outline-danger btn-sm" style="float: right; margin-left: 0.5vw" href="./deletar/?id=<?=$chave['id']?>"> Deletar </a>
          <a class="btn btn-outline-warning btn-sm" style="float: right;" href="./editar/?id=<?=$chave['id']?>"> Editar </a>
        </div>
        <div class="card-body">
            <div class="col-12 col-sm-12"> 
              <div><small>Status: <?= $chave['id_status'] ?> | Instituição: <?= $chave['instituicao'] ?> | Usuário: <?= $chave['id_usuario'] ?> </small> </div>
              <div><small>Descrição: <?= $chave['descricao'] ?> </small> </div>
            </div>
        </div>
      </div>

  <?php endforeach; ?>
  <?php echo $pagination['pagination']; ?>
  </div>

<?php 
    include "../config/footer/footer.php"; 
?>

