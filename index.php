<?php 
require 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>To do list</title>
</head>

<body>
  <div class="main">
   <div class= "add-sessao">
     <form action="app/add.php" method="POST" autocomplete="off">
      <?php if(isset($_GET['mess'])&& $_GET['mess'] == 'error' ){ ?>
        <input 
     id ="atividade"
     type="text" 
     style= "border-color: ff6666"  
     name="titulo" 
     placeholder="Não pode deixar esse espaço em branco .." 
     >
   <button type="submit" id="btAdicionar">Adicionar &nbsp; </button>
     <?php }else {  ?>
     
     
        <input 
     id ="atividade"
     type="text"  
     name="titulo" 
     placeholder="Adicione uma atividade..." 
     >
   <button type="submit" id="btAdicionar">Adicionar &nbsp; </button>
   <?php } ?>


   </div>
  

  </form>
   </div>
<?php

$sql = ' SELECT * FROM 
todos ORDER BY  id DESC ';
$resultado = mysqli_query($conexao,$sql);

?>
  <div class="show-todo-section">
    <?php
     if($resultado -> num_rows <= 0) { ?>
  <div class = "todo-item">
     <div class="empty">
      <img src="img/focus.gif" width="80px" alt="">
     </div>
    </div>
<?php } ?>


<?php while( $todo = $resultado->fetch_assoc() ){  ?>

  <div class = "todo-item">
      <span id="<?php  echo $todo["id"]; ?>"
            class="remove-to-do" >x</span>
      <?php  if($todo['checked']){?> 
        <input type="checkbox" 
               class= "check-box" 
               checked/>
        <h2 class= "checked"><?php echo $todo ['titulo'] ?></h2>
        <?php }else{ ?>
          <input type="checkbox" 
               class= "check-box" />
        <h2><?php echo $todo ['titulo'] ?></h2>
        <?php } ?>
         <br>
        <small>Criado: <?php echo $todo['data_hora'] ?> </small>
     
     </div>
        <?php  } ?>
      
      

     
   
  

  
</body>

</html>