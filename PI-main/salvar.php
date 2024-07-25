<?php  
$titulo = $_POST['titulo'];
$descricao= $_POST['descricao'];
$data = $_POST['data'];

 
// inicio do upload
$nomeDoArquivo = $_FILES['foto']['name'];
$partes = explode(".",$nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($partes);
$pasta = "img/";
move_uploaded_file($_FILES['foto']['tmp_name'], $pasta . $nomeNovo);
// fim do upload 

include "conexao.php";
$sql = "insert into tb_eventos(titulo,descricao, data, foto) Value ('$titulo','$descricao','$data','$nomeNovo')";
mysqli_query($conexao, $sql);


mysqli_close($conexao);
 
header("location:index.php");
