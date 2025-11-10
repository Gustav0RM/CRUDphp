function confirma_alt_cad(tipo, cod)
  {
  const campo_nome = document.querySelector('[name="nome"]').value;
  const campo_senha = document.querySelector('[name="senha"]').value;

  if (campo_nome == '' || campo_senha == '')
    {
    alert ('Preencha todos os campos');
    exit;
    }
  if (tipo == 'cad')
    {
    const formulario = document.querySelector('[name="form"]');
    formulario.action = "usuario.php?tipo=" + tipo + "bd";
    formulario.submit();
    }
  else
    {
    const formulario = document.querySelector('[name="form"]');
    formulario.action = "usuario.php?tipo=" + tipo + "bd&cod=" + cod;
    formulario.submit();
    }
  }


//---------------------------------------------
function confirma_excluir(cod)
  {
  if (cod != null)
    {
    confirm('Deseja excluir este usuário?');
    const formulario = document.querySelector('[name="form"]');
    formulario.action = "usuario.php?tipo=excluirbd&cod=" +cod;
    formulario.submit();
    }
  
  }