<?php
session_start();
require '../classes/conexao.php';

if (isset($_POST['cadbd']))
  {
  $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
  $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

  $sql = "INSERT INTO tb_usuario (nome_usu,senha_usu) VALUES ('$nome', '$senha')";

  mysqli_query($conexao, $sql);

  if (mysqli_affected_rows($conexao) > 0 ) 
    {
    $_SESSION['mensagem'] = 'Usuário criado com sucesso';
    header('Location: ../paginas/sistema/usuarios.php');
    exit;
    } 
  else 
    {
    $_SESSION['mensagem'] = 'erro de execução';
    header('Location: ../paginas/sistema/usuarios.php');
    exit;
    }

  }

?>