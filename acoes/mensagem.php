<script>
  //script para fechar as mensagens automaticamente
    setTimeout(() => 
    {
    document.querySelectorAll('.toast').forEach(toastEl => 
      {
      const toast = bootstrap.Toast.getOrCreateInstance(toastEl);
      toast.hide();
      });
    }, 3000);
</script> <? 

if (isset($_SESSION['mensagem_sucesso'])) 
  { ?>
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast show bg-success">
      <div class="toast-header">
        <strong class="me-auto">Mensagem</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </div>
      <div class="toast-body">
        <?=$_SESSION['mensagem_sucesso'];?>
      </div>
    </div>
  </div> <?
  unset($_SESSION['mensagem_sucesso']); 
  }

  if (isset($_SESSION['mensagem_alerta'])) 
  { ?>
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast show bg-warning">
      <div class="toast-header">
        <strong class="me-auto">Mensagem</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </div>
      <div class="toast-body">
        <?=$_SESSION['mensagem_alerta'];?>
      </div>
    </div>
  </div> <?
  unset($_SESSION['mensagem_alerta']);
  }

  if (isset($_SESSION['mensagem_erro'])) 
  { ?>
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast show bg-danger">
      <div class="toast-header">
        <strong class="me-auto">Mensagem</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </div>
      <div class="toast-body">
        <?=$_SESSION['mensagem_erro'];?>
      </div>
    </div>
  </div> <?
  unset($_SESSION['mensagem_erro']); 
  } 
?>
