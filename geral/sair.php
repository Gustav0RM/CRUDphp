<?
session_start();

// Remove todas as variáveis de sessão
$_SESSION = array();

// Se estiver usando cookies de sessão, remove o cookie também
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Encerra a sessão
session_destroy();

// Redireciona para a página de login ou inicial
header("Location:/CRUDphp/telalogin.php");
exit();
?>