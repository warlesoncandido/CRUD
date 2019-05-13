<?php

    
    $acao='recuperar';
    require 'controller.php';
  

   

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        
    </nav>
    <div class="container-fluid">
      <? if(isset($_GET['insert']) && $_GET['insert']==1) { ?>
        <div class="bg-success text-white justify-content-center d-flex pt-2"> 
            <h5>Tarefa inserida com Sucesso!!</h5>
        </div>
      <?}?>
      <? if(isset($_GET['atualizado']) && $_GET['atualizado']==1) { ?>
        <div class="bg-success text-white justify-content-center d-flex pt-2"> 
            <h5>Atualizado com sucesso!!</h5>
        </div>
      <?}?>
        <div class="formulario">
            <form action="controller.php?acao=inserir" method="POST" class="form">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" class='form-control'>
                </div>
                <input type="submit" value="Cadastrar" class="btn btn-large btn-success btn-block">
            </form>
        </div>  
        <div class="tabela">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Ação</td>
                    </tr>
                </thead>
                <tbody>
                    <? foreach($services as $indice => $tarefa){?>
                    <tr>
                        <td><?=$tarefa->id?></td>
                        <td id = "nome_<?=$tarefa->id?>"><?=$tarefa->nome?></td>
                        <td><button class="btn btn-danger" onclick="remover(<?=$tarefa->id?>)">Excluir</button>&nbsp<a href="#" class="btn btn-warning" onclick="editar(<?=$tarefa->id?>,'<?=$tarefa->nome?>')">Editar</a></td>
                    </tr>
                    <?}?>
                    <form action="" id="formularioEdit">

                    </form>
                </tbody>

            </table>
        </div>  
    </div>
    <script src="js/scripit.js"></script>
</body>
</html>