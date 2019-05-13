<?php

    require 'conexao.php';
    require 'model.php';
    require 'usuario.service.php';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if( $acao == 'inserir'){

        $user = new Usuario();
        $user->__set('nome',$_POST['nome']);

        $conexao = new Conexao();
        

        $usuarioService = new UsuarioService($conexao,$user);
        $usuarioService->inserir();

        header('location:index.php?insert=1');
    } else if($acao == 'recuperar'){
        $user = new Usuario();
        $conexao = new Conexao();
        $usuarioService = new UsuarioService($conexao,$user);
        $services=$usuarioService->recuperar();
        
    } else if($acao == "atualizar"){
        $user = new Usuario();
        $user->__set('id',$_POST['id']);
        $user->__set('nome',$_POST['nome']);
        $conexao = new Conexao();
        $usuarioService = new UsuarioService($conexao,$user);
        $usuarioService->atualizar();
        header('location:index.php?atualizado=1');
    
    }else if($acao == "remover"){
        $user = new Usuario();
        $user->__set('id',$_GET['id']);
        $conexao = new Conexao();
        $usuarioService = new UsuarioService($conexao,$user);
        $usuarioService->remover();
    }

?>
