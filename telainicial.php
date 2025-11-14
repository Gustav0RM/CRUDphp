<?
session_start();
include('../CRUDphp/classes/conexao.php');
include('../CRUDphp/acoes/mensagem.php');
include('../CRUDphp/geral/cabecalho.php');

if (!isset($_SESSION['usuario_id'])) 
  {
  $_SESSION['mensagem_alerta'] = 'Sessão inválida.';
  session_destroy();
  header("refresh: 3; url=/CRUDphp/telalogin.php");
  exit;
  } ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <title>Tela inicial</title>
</head>
<body>
  
  <div class="container-fluid text-center">
    <h1>TESTE</h1>
  </div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>