<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'crud');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('NAO FOI POSSIVEL CONECTAR');
?>