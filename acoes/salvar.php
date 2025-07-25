<?php
session_start();
require '../classes/conexao.php';

if (isset($_POST['cadbd']))
  {
  $nome_limpo = isset($_POST['nome']) ? trim($_POST['nome']) : ''; //retira espaços dos campos para salvar
  $senha_limpa = isset($_POST['senha']) ? trim($_POST['senha']) : ''; //retira espaços dos campos para salvar
  $senha = '';
  $nome = '';

  if (empty($nome_limpo) || empty($senha_limpa))
    {
    $_SESSION['mensagem'] = "CADASTRO NAO REALIZADO. Os campos nome e senha são obrigatórios";
    header('Location: ../paginas/sistema/usuarios.php?tipo=');
    exit;
    }
  
  $nome = mysqli_escape_string($conexao, $nome_limpo); 
  $senha = password_hash($senha_limpa, PASSWORD_DEFAULT);

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