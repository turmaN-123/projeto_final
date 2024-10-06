<?php
  session_start();
  require_once '../model/DTO/usuarioDTO.php';
  require_once '../model/DAO/usuarioDAO.php';
  
  //Valida se o usuário passou pela tela de login
  if(!isset($_POST["emailUsu"])){
    header("location:../view/login.php?msg=Acesso indevido!");
  }
  $emailUsu = strip_tags($_POST["emailUsu"]);
  $senhaUsu = MD5($_POST["senhaUsu"]);
  $usuarioDAO = new UsuarioDAO();     
  $sucesso = $usuarioDAO->validarLogin($emailUsu, $senhaUsu);
  if($sucesso){
    $msg = "legal!! estou logado!!"; 
	//Grava os principais dados de login do usuário
    $_SESSION["idUsu"] = $sucesso["idUsu"];
    $_SESSION["nomeUsu"] = $sucesso["nomeUsu"];
    //$_SESSION["fotoUsuario"] = $sucesso["fotoUsu"];
    $_SESSION["emailUsu"] = $sucesso["emailUsu"];
    $_SESSION["situacaoUsu"] = $sucesso["situacaoUsu"];
    $_SESSION["perfilUsu"] = $sucesso["perfilUsu"];
    
    //var_dump($_SESSION);

    exit;

  } else {
    $msg = "Usuário ou senha inválido!";
  }
  header("Location: ../view/listarProdutos.php");

?>  