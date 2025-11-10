<?
session_start();
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : null;
require '../CRUDphp/classes/conexao.php';
include '../CRUDphp/acoes/mensagem.php'; 

if ($tipo == 'entrar')
  {
  $nome = isset($_POST['nomelogin']) ? trim($_POST['nomelogin']) : '';
  $senha = isset($_POST['senhalogin']) ? trim($_POST['senhalogin']) : '';

  if (empty($nome) || empty($senha))
    {
    $_SESSION['mensagem_alerta'] = "Insira o nome e a senha";
    header('Location: /CRUDphp/telalogin.php');
    exit;
    }

  $sql = "SELECT * FROM tb_usuario WHERE nome_usu = '$nome'";
  $retorno_sql = mysqli_query($conexao, $sql);
  $dados_usu = mysqli_fetch_array($retorno_sql);
 
  if ($retorno_sql && mysqli_num_rows($retorno_sql) > 0) 
    {
    if (password_verify($senha, $dados_usu['senha_usu']))
      {
      $_SESSION['usuario_id'] = $dados_usu['id_usu']; 
      $_SESSION['usuario_nome'] = $dados_usu['nome_usu'];
      header('Location: /CRUDphp/telainicial.php');
      $_SESSION['mensagem_sucesso'] = 'Login realizado com sucesso. Bem vindo ' . $_SESSION['usuario_nome'];
      exit;
      }
    else 
      {
      $_SESSION['mensagem_alerta'] = 'Usuario ou senha incorretos';
      header('Location: /CRUDphp/telalogin.php');
      exit;
      }
    }
  else 
    {
    // FALHA NO LOGIN
    $_SESSION['mensagem_alerta'] = 'Verifique seus dados novamente';
    header('Location: /CRUDphp/telalogin.php');
    exit;
    }
  } ?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CRUDphp/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>TELA INICIAL</title>
</head>

<body id="login">
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-10 col-md-6 col-lg-4">
      <form action="../CRUDphp/telalogin.php?tipo=entrar"  method="POST">
        <h2 class="text-center mb-4">Nome do sistema</h2> 
        <div class="row mb-3">
          <label for="nomelogin" class="col-sm-12 col-form-label">Usuário</label>
          <div class="col-sm-12">
            <input type="text" name="nomelogin" class="form-control" placeholder="seu nome">
          </div>
        </div>
        <div class="row mb-3">
          <label for="senhalogin" class="col-sm-12 col-form-label">Senha</label>
          <div class="col-sm-12">
            <input type="password" name="senhalogin" class="form-control" id="senhalogin" placeholder="Sua senha">
          </div>
        </div>
        <input class="btn btn-dark" type="submit" value="Entrar">
      </form>
    </div>
  </div> 
 

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>