<?php
require "autenticacao.php";
require "conexao.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_POST["email"];
    $_POST["senha"];

    $login = new Autenticacao($conn);
    $usuario = $login->verificarUsuario($email,$senha);
    if($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: index.php");
        exit;
    }else{
        
    }

    if($login->verificarUsuario($email,$senha)){
        header("Location: index.php");
    } else{
        header("Location: login.php?erro=1");
    }
}

?>