<?php
session_start();
require '../classes/conexao.php';

if (isset($_POST['cadbd']))
  {
  $nome_limpo = isset($_POST['nome']) ? trim($_POST['nome']) : ''; //retira espaços dos campos para salvar
  $senha_limpa = isset($_POST['senha']) ? trim($_POST['senha']) : ''; //retira espaços dos campos para salvar

  if (empty($nome_limpo) || empty($senha_limpa))
    {
    $_SESSION['mensagem_alerta'] = "CADASTRO NAO REALIZADO. Os campos nome e senha são obrigatórios";
    header('Location: ../paginas/sistema/usuarios.php?tipo=');
    exit;
    }
  
  $nome = mysqli_escape_string($conexao, $nome_limpo); 
  $senha = password_hash($senha_limpa, PASSWORD_DEFAULT);

  $sql = "INSERT INTO tb_usuario (nome_usu,senha_usu) VALUES ('$nome', '$senha')";
  mysqli_query($conexao, $sql);

  if (mysqli_affected_rows($conexao) > 0 ) 
    {
    $_SESSION['mensagem_sucesso'] = 'Usuário criado com sucesso';
    header('Location: ../paginas/sistema/usuarios.php');
    exit;
    } 
  else 
    {
    $_SESSION['mensagem_erro'] = 'erro de execução';
    header('Location: ../paginas/sistema/usuarios.php');
    exit;
    }

  }
elseif (isset($_POST['altbd']))
  {
  $cod = addslashes($_GET['cod']);
  $nome_limpo = trim($_POST['nome']);
  $senha_limpa = trim($_POST['senha']);

  if (empty($nome_limpo) || empty($senha_limpa))
    {
    $_SESSION['mensagem_alerta'] = "Alteração não realizada. Os campos são obrigatórios";
    header('Location: ../paginas/sistema/usuarios.php?tipo=');
    exit;
    }
  
  $nome = mysqli_escape_string($conexao, $nome_limpo);
  $senha = password_hash($senha_limpa, PASSWORD_DEFAULT);

  $consulta = "UPDATE tb_usuario SET nome_usu = '$nome', senha_usu = '$senha' WHERE id_usu = '$cod'";
  mysqli_query($conexao, $consulta);
  
  if (mysqli_affected_rows($conexao) > 0 ) 
    {
    $_SESSION['mensagem_sucesso'] = 'Usuário alterado com sucesso';
    header('Location: ../paginas/sistema/usuarios.php');
    exit;
    } 
  else 
    {
    $_SESSION['mensagem_erro'] = 'erro de execução alt';
    header('Location: ../paginas/sistema/usuarios.php');
    exit;
    }
  }
elseif (isset($_POST['excluir']))
    {
    $cod = addslashes($_GET['cod']);
    $consulta_excluir = "DELETE FROM tb_usuario WHERE id_usu = '$cod'";
    mysqli_query($conexao, $consulta_excluir);

    if (mysqli_affected_rows($conexao) > 0 ) 
      {
      $_SESSION['mensagem_sucesso'] = 'Usuário excluido com sucesso';
      header('Location: ../paginas/sistema/usuarios.php');
      exit;
      } 
    else 
      {
      $_SESSION['mensagem_erro'] = 'erro de execução exclusao';
      header('Location: ../paginas/sistema/usuarios.php');
      exit;
      }
    }

?>