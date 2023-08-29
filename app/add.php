<?php 

if (isset($_POST['titulo'])){
  require '../conexao.php';

  $titulo = $_POST['titulo'];
  
  if (empty($titulo)){
    header("Location:../index.php?mess=error");
  }else{
    $stmt = $conexao -> prepare("INSERT INTO todos(titulo) VALUE(?)");
    $stmt->bind_param("s",$titulo);
    $res = $stmt-> execute();

    if($res){
      header("Location: ../index.php?mess=sucess");
    }else{
      header ("Location: ../index.php");
    }

    $conexao= null;

    exit();

  }
}else{
  header("Location:../index.php?mess=error");
}




?>