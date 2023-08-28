
<?php

// cria a conexão
$conexao = mysqli_connect("localhost", "root", "", "to_do_list");

// verifica a conexão

if(!$conexao){
	die("Falha na conexão: ".mysqli_connect_error());
}
echo "Sucesso na conexão";	

  ?>










