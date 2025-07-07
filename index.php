<?php
require '../CRUDphp/classes/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>TELA INICIAL</title>
</head>

<body id="login">
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-10 col-md-6 col-lg-4">
      <form>
        <h2 class="text-center mb-4">Nome do sistema</h2> <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-12 col-form-label">Usuário</label>
          <div class="col-sm-12">
            <input type="email" class="form-control" id="inputEmail3" placeholder="seu-email@exemplo.com">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-12 col-form-label">Senha</label>
          <div class="col-sm-12">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Sua senha">
          </div>
        </div>
        <button type="submit">login</button>
      </form>
    </div>
  </div>









 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>