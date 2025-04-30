<?php
session_start();
require 'conexao.php';
?>


<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

    <?php
    include("navbar.php");
    ?>
  <div class ="container mt-4">
    <?php

    include('mensagem.php');
    ?>
    <div class ="row">
        <div class ="col-md-12">
            <div class = "card">
                <div class = "card-header">
                    <h4> Lista de Usuários
                    <a href = "usuario-create.php" class = "btn btn-primary float-end"> Adicionar Usuário</a> </h4>

</div>

<div class ="card-body">
    <table class = "table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>    
                <th>Nome</th>    
                <th>Email</th>    
                <th>Data de nascimento</th>
                <th>Ações</th>    
</tr>
</thead>
<tbody>
    <?php
     $sql = 'SELECT * FROM usuarios';
     $usuarios = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($usuarios) > 0){
        foreach($usuarios as $usuario){

        

    
    ?>
    <tr>
    <td><?= $usuario['id'] ?></td>
    <td><?= $usuario['nome'] ?></td>
    <td><?= $usuario['email'] ?></td>
    <td><?= date('d/m/y', strtotime($usuario['data_nascimento'] ))?></td>
       
       

        <td>
            <a href ="usuario-view.php?id=<?=$usuario['id']?>" class = "btn btn-secondary btn-sm">Visualizar</a>
            <a href ="usuario-edit.php?id=<?=$usuario['id']?>" class = "btn btn-success btn-sm">Editar</a>
            <form action = "acoes.php"  method= "POST" class ="d-inline">

            <input type="hidden" name="delete_usuario" value="<?=$usuario['id']?>">
                <button onclick ="return confirm('Tem certeza que deseja exluir esse usuário?')" type ="submit" name="delete_usuario" value="<?=$usuario['id']?>" class = "btn btn-danger btn-sm">

                Excluir
</button>

            </td>



</tr>
<?php

        }
    } else{
        echo '<h5>Nenhum usuário encontrado</h5>';
    }

    
    ?>

</tbody>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>