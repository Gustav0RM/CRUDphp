<?
session_start(); 
include_once('../../classes/conexao.php');
$tipo = isset($_GET['tipo']) ? strtolower($_GET['tipo']) : null;
$titulo = ($tipo === "cad" ? "Cadastrar" : ($tipo === "alt" ? "Editar" : "Buscar")) . " Usuário";
$cod = isset($_GET['cod']) ? addslashes($_GET['cod']) : null ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"> 
  <script src="../../geral/funcoes.js"></script>
  <title><?=$titulo?></title>
  </head>
  <body> <?
      include_once('../../geral/cabecalho.php');
      if ($tipo === null)
        { 
        var_dump(getcwd());
        include('../../acoes/mensagem.php'); ?>
        <label class="text-end col-md-12"  for="logado"><?=$_SESSION['usuario_nome']?></label>
        <div class="container mt-4">
          <a class="text-decoration-none text-black" href="../sistema/usuarios.php?tipo=cad"> 
            <i class="bi bi-person-add fs-5 text-success"></i>
            Cadastrar usuário
          </a>
          <div class="row">
            <div class="col-md-12">
              <div class="card mt-3" id="cards">
                <div class="card-header" id="card-header">
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
                      </tr> <?
                      $sql_usuario = "SELECT * FROM tb_usuario";
                      $retorno_consulta = mysqli_query($conexao, $sql_usuario);
                      if (mysqli_num_rows($retorno_consulta) > 0)
                        {
                        while ($dados_usuario = mysqli_fetch_array($retorno_consulta))
                          { ?>
                          <tr>
                            <td class="text-center">
                              <a class="text-decoration-none" href="../sistema/usuarios.php?tipo=alt&cod=<?=$dados_usuario['id_usu']?>">
                                <i class="bi bi-person-gear text-warning fs-5"></i>
                              </a>
                            </td>
                            <td><?=$dados_usuario['id_usu']?></td>
                            <td><?=$dados_usuario['nome_usu']?></td>
                            <td>?</td>
                          </tr> <? 
                          } 
                        } ?>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> <?
    } 
    elseif ($tipo === "alt" || $tipo === "cad")
      {
      $sql_usuario_alt = "SELECT * FROM tb_usuario WHERE id_usu = '$cod'";
      $retorno_consulta_alt = mysqli_query($conexao, $sql_usuario_alt);
      $dados_usuario_alt = mysqli_fetch_array($retorno_consulta_alt); ?>
       
      <label class="text-end col-md-12"  for="logado"><?=$_SESSION['usuario_nome']?></label>     
      <div class="container mt-4 ms-0 col-4">
        <a class="text-decoration-none text-black" href="../sistema/usuarios.php"> 
            <i class="bi bi-reply fs-5 text-danger"></i>
            Voltar
          </a>
        <div class="row">
          <div class="col-md-12">
            <div class="card mt-3" id="cards">
              <div class="card-header" id="card-header">
                <h2><?=$titulo?></h2>
              </div>
              <div class="card-body">
                <form action="../../acoes/salvar.php?cod=<?=$cod?>" method="POST" class="bg-light">
                  <div class="row mb-2">
                    
                    <label for="nome" class="col-sm-auto col-form-label text-black">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" name="nome" class="form-control" value="<?=isset($dados_usuario_alt['nome_usu']) ? $dados_usuario_alt['nome_usu'] : ''?>"  aria-label="Seu nome">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <label for="senha" class="col-sm-auto col-form-label text-black">Senha</label>
                    <div class="col-sm-10">
                      <input type="password" name="senha" class="form-control" value="<?=isset($dados_usuario_alt['senha_usu']) ? $dados_usuario_alt['senha_usu'] : ''?>"  aria-label="Sua senha">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button class="col-2" type="submit" name="<?=($tipo === "cad" ? 'cadbd' : 'altbd')?>"
                      ><?=($tipo === "cad" ? 'Cadastrar' : 'Alterar')?></button>
                    </div><?

                    if ($tipo === 'alt')
                      { ?>
                      <div class="col">
                        <form action="../../acoes/salvar.php?cod=<?=$cod?>" method="POST">
                          <button class="bg-danger col-2" type="submit" onclick="return confirm('Deseja excluir este usuário?')"  name="excluir">Excluir</button>
                      </form>
                    </div> <?
                      } ?>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> <?
      } ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">        
      </script>
    </body> 
  </html> 
