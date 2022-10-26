<?php
$dbHost= "200.131.242.42";
$dbUsername= "ifnmg";
$dpPassword= "IFMoc@my";
$dbname= "clientes";

$conexao = mysqli_connect($dbHost,$dbUsername,$dpPassword,$dbname);

if(!$conexao){
    die("Falha de Conexão:" .mysqli_connect_error());

}
echo "Conectado com sucesso";

?>

