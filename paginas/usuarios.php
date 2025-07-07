<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">  
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navegacao">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Meu Site</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sistema
              </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="../paginas/usuarios.php">Controle de usuários</a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item text-danger" href="#">
                  <i class="bi bi-box-arrow-right me-2"></i> Sair
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <a class="text-decoration-none text-black" href="#"> 
      <i class="bi bi-person-add fs-5 text-success"></i>
      Cadastrar usuário
    </a>
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-header">
            <h4>Lista de usuários
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Editar</th>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Senha</th>
                  <th>Excluir</th>
                </tr>
                <tr>
                  <td class="text-center">
                    <a class="text-decoration-none" href="#">
                      <i class="bi bi-person-gear text-black fs-5"></i>
                    </a>
                  </td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-center">
                    <a href="#" class="text-decoration-none">
                      <i class="bi bi-person-x text-danger fs-5"></i>
                    </a>
                  </td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>













  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>