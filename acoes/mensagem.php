<? 
if (isset($_SESSION['mensagem_sucesso'])) 
  { ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert"> 
    <?=$_SESSION['mensagem_sucesso']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> <?php
  unset($_SESSION['mensagem_sucesso']); 
  }

  if (isset($_SESSION['mensagem_alerta'])) 
  { ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
    <?=$_SESSION['mensagem_alerta']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> <?php
  unset($_SESSION['mensagem_alerta']); 
  }

  if (isset($_SESSION['mensagem_erro'])) 
  { ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
    <?=$_SESSION['mensagem_erro']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> <?php
  unset($_SESSION['mensagem_erro']); 
  } 
?>
