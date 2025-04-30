


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

    <div class ="container mt-5">
        <div class ="row">
            <div class ="col-md-12">
              <div class ="card">
                <div class ="card-header">
                    <h4> Adicionar Usuário
                        <a href ="index.php" class = "btn btn-danger float-end"> Voltar </a> </h4>
</div>

<div class = "cardy-body">
    <form action = "acoes.php" method = "POST">
        <div class = "mb-3">
            <label>Nome</label>
            <input type = "text" name="nome" class="form-control">
</div>

<div class = "mb-3">
            <label>Email</label>
            <input type = "text" name="email" class="form-control">
</div>

<div class = "mb-3">
            <label>Data de nascimento</label>
            <input type = "date" name="data_nascimento" class="form-control">
</div>

<div class = "mb-3">
            <label>Senha</label>
            <input type = "password" name= "senha" class="form-control">
</div>

<div class = "mb-3">
           <button type ="submit" name ="create_usuario" class ="btn btn-primary"> Salvar </button>
</div>