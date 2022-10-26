<?php
$dbHost= "localhost";
$dbUsername= "root";
$dpPassword= "";
$dbname= "clientes";

$conexao = mysqli_connect($dbHost,$dbUsername,$dpPassword,$dbname);

if(!$conexao){
    die("Falha de Conexão:" .mysqli_connect_error());

}
echo "Conectado com sucesso";

?>

