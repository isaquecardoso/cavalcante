<?php
session_start();
if (isset($_POST['matricula']) && !empty($_POST['matricula']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    
    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();

    $matricula = addslashes($_POST['matricula']);
    $senha = addslashes($_POST['senha']);

    if($u->login($matricula, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header('Location:../../../aluno/index.php');
            exit();
        }else{
            $_SESSION ['nao_autenticado'] = true;
            header('Location:index.php');
            exit();
        }
    }else{
        $_SESSION ['nao_autenticado'] = true;
        header('Location:index.php');
        exit();
    }

}else{
    $_SESSION ['nao_autenticado'] = true;
    header('Location:index.php');
    exit();
}
?>