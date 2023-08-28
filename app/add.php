<?php 

if (isset($_POST['titulo'])){
  require '../conexao.php';

  $titulo = $_POST['titulo'];
  
  
  
  if (empty($titulo)){
    header("Location:../index.php?mess=error");
  }
}




?>