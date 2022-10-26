<?php

include_once("index.php");

$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$genero= $_POST['genero'];
$cidade= $_POST['cidade'];
$estado= $_POST['estado'];
$endereco= $_POST['endereco'];

echo "$nome<br>";
echo "$email<br>";
echo "$telefone<br>";
echo "$genero<br>";
echo "$cidade<br>";
echo "$estado<br>";
echo "$endereco<br>";


$sql = " INSERT INTO usuario (nome,email,telefone,genero,cidade,estado,endereco)
VALUES('$nome','$email','$telefone','$genero','$cidade','$estado','$endereco')";

 if(mysqli_query($conexao, $sql)){
        echo "Novo registro criado com sucesso";
 }else{
    echo "Error:". $sql ."<br>" . mysqli_error($conexao);
 }
mysqli_close($conexao);
#header('Location:admusuario.php');


?>