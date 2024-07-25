<?php

$titulo = $_POST["titulo"];
$data = $_POST["data"];
$descricao = $_POST["descricao"];
$foto = $_POST["foto"];

$nomeDoArquivo = $_FILES['foto']['name'];
$partes = explode (".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($partes);
$pasta = "img/";
move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $nomeNovo);
 
 
if($nomeDoArquivo != ""){
    $sql = "update  tb_eventos set titulo='$titulo', foto='$nomeNovo' where id = $id";
}else{
    $sql = "update  tb_eventos set titulo='$titulo', where id = $id";
}

include "conexao.php";
$sql = "insert into bd_eventos(titulo, data, descricao, foto) values('$titulo', '$descricao', '$data', '$nomeNovo')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);


?>