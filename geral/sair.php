<?
$_SESSION['mensagem_sucesso'] = 'Saindo do sistema...';
session_unset();
session_destroy();
http_response_code(200);
header("Location: index.php");
?>