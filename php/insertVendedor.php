<?php
// incluir a conexao de banco de dados
include 'conexao.php';

//guardar a instrução do mysql na variavel
$insert = "INSERT INTO tb_vendedor VALUE (null,'Jose Carlos','13981636199',1)"; 

//função query irá executar a institrução sql dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo"<script>alert('Cliente cadastrado com sucesso')</script>";
    
}




?>  