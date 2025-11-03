function deslogar()
  {
fetch("logout.php", {
  method: "POST",
  credentials: "include" // envia cookies de sessão
})
.then(() => window.location.href = "login.php");
  }