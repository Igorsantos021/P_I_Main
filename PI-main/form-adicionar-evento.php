<?php 
include "cabecalho.php"; 

$titulo = "";
$data = "";
$descricao = "";
$foto = "";


?>
<h2>CADASTRAR UM NOVO EVENTO</h2>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="titulo" placeholder="titulo" class="form-control">
    <br>
    <input type="text" name="descricao" placeholder="descricao" class="form-control">
    <br>
    <input type="date" name="data" placeholder="data" class="form-control">
    <br>
    <input type="file" name="foto" placeholder="foto" class="form-control">
    <br>
    <br>
    <button class="btn btn-dark" type="submit">SALVAR ITEM</button>

 
</form>


 
<?php include "rodape.php"?>