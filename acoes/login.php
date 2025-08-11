<?php
session_start();

 if (isset($_POST['entrar']))
  {
  require '../classes/conexao.php';

  $nome = isset($_POST['nomelogin']) ? trim($_POST['nomelogin']) : '';
  $senha = isset($_POST['senhalogin']) ? trim($_POST['senhalogin']) : '';

  if (empty($nome) || empty($senha))
    {
    $_SESSION['mensagem_alerta'] = "Insira o nome e a senha";
    header('Location: ../index.php');
    exit;
    }
    
  $nome_seguro = mysqli_escape_string($conexao, $nome);
  $senha_segura = mysqli_escape_string($conexao, $senha);

  $sql = "SELECT * FROM tb_usuario WHERE nome_usu = '$nome_seguro'";
  $retorno_sql = mysqli_query($conexao, $sql);
 

  if ($retorno_sql && mysqli_num_rows($retorno_sql) > 0) 
    {
    $dados_usu = mysqli_fetch_array($retorno_sql);

    if (password_verify($senha, $dados_usu['senha_usu']))
      {
      $_SESSION['usuario_id'] = $dados_usu['id_usu']; 
      $_SESSION['usuario_nome'] = $dados_usu['nome_usu'];
      header('Location: ../paginas/sistema/usuarios.php');
      $_SESSION['mensagem_sucesso'] = 'Login realizado com sucesso. Bem vindo ' . $_SESSION['usuario_nome'];
      exit;
      }
    else 
      {
      $_SESSION['mensagem_alerta'] = 'Usuario ou senha incorretos';
      header('Location: ../index.php');
      exit;
      }
    
    }
  else 
    {
    // FALHA NO LOGIN
    $_SESSION['mensagem_alerta'] = 'Verifique seus dados novamente';
    header('Location: ../index.php');
    exit;
    }
  }
?>