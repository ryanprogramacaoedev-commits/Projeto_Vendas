<?php
// incluir a conexao de banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variavel
$insert = "INSERT INTO tb_produto VALUE (null,'camera','6000')"; 

//função query irá executar a institrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo"<script>alert('Cliente cadastrado com sucesso')</script>";
    
}




?>