<?php
$host = "localhost";
$user = "root";
$passord = "";
$dbName= "inscricao";

$conexao = new mysqli($host,$user,$passord,$dbName);
if(!$conexao){
    echo "Falha na conexao";
}else{
    echo "Sucesso ao conectar";
}



?>