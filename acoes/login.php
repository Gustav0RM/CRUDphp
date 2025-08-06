<?php
session_start();

 if (isset($_POST['entrar']))
  {
  require '../classes/conexao.php';

  $nome = isset($_POST['nomelogin']) ? trim($_POST['nomelogin']) : '';
  $senha = isset($_POST['senhalogin']) ? trim($_POST['senhalogin']) : '';

  $nome_seguro = mysqli_escape_string($conexao, $nome);
  $senha_segura = mysqli_escape_string($conexao, $senha);

  $sql = "SELECT * FROM tb_usuario WHERE nome_usu = '$nome' AND senha_usu = '$senha'";
  $retorno_sql = mysqli_query($conexao, $sql);
  $dados_usu = mysqli_fetch_array($retorno_sql);

  if ($retorno_sql && mysqli_num_rows($retorno_sql) == 1) 
    {
    $_SESSION['usuario_id'] = $dados_usu['id_usu']; 
    $_SESSION['usuario_nome'] = $dados_usu['nome_usu'];
    header('Location: ../paginas/sistema/usuarios.php');
    $_SESSION['mensagem'] = 'Login realizado com sucesso. Bem vindo ' . $_SESSION['usuario_nome'] ;
    }
  else 
    {
    // FALHA NO LOGIN
    echo "Falha no login. Verifique seu nome de usuário e senha.";

    }
  }
?>