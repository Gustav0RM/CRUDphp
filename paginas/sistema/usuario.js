function confirma_alt_cad(tipo, cod)
  {
  const formulario = document.querySelector('[name="form"]');
  formulario.action = "usuario.php?tipo=" + tipo + "&cod=" + cod;
  formulario.target = "usuario.php";
  formulario.submit();
  }


//---------------------------------------------
function confirma_excluir(cod)
  {
  if (cod != null)
    {
    alert ('Deseja excluir este usuário?');
    const formulario = document.querySelector('[name="form"]');
    formulario.action = "usuario.php?tipo=excluirbd?cod=" +cod;
    formulario.target = "usuario.php";
    formulario.submit();
    }
  
  }