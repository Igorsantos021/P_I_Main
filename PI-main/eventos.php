<?php include ("cabecalho.php")?>

<div class = "container mt-4 text-center">
<h2>Cadastrar novo Evento</h2><br>
<form  method="post" action="form-adicionar-evento.php?id=<?=$id;?>">
    
<a href="form-adicionar-evento.php" class="btn btn-dark">ADICIONAR EVENTO</a>
</form>
</div>
<!-- Seção de Cards -->
<div class="container mt-4">
    <h1>Proximos Eventos</h1>
    <div class="row">
        
    <?php
                $servidor = "127.0.0.1";
                $usuario = "root";
                $senha = ""; 
                $bd = "bd_eventos";

                $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

                if (!$conexao) {
                    die("Falha na conexão: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM tb_eventos ORDER BY data ASC LIMIT 15";

                $resultado = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultado) > 0) {
            ?>
                    <div class="container  mt-4">
                        <div class="row">
            <?php
                    while ($umEvento = mysqli_fetch_assoc($resultado)) {
            ?>
             <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
            <img height="250" src="img/<?php echo $umEvento["foto"]; ?>" alt="<?php echo $umEvento["titulo"]; ?>" class="">
                <div class="card-body">
                    <h5 class="card-title"><p><?php echo $umEvento["titulo"]; ?></p></h5>
                    <p class="card-text"><p><?php echo $umEvento["data"]; ?></p></p>
                    <p class="card-text"><p><?php echo $umEvento["descricao"]; ?></p></p>
                </div>
            </div>
        </div>
            <?php
                    }}
            ?>

<hr>
<div class="clock-clock">
            <div class="clock"></div>
        </div>
        <script src="./script.js"></script>
    </div>
</div>


<?php include ("rodape.php")?>