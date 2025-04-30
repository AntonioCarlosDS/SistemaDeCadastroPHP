<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'aluno');
define('DB', 'crudphp');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possível realizar a conexão")



?>