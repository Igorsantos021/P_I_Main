<?php include("cabecalho.php") ?>

<!-- Carrossel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner1.png" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>FLUXO FEST</h5>
                <p>Aqui você não fica sem rolê</p>
                <p>cadastre seu evento</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/banner2.png" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>FLUXO FEST</h5>
                <p>Aqui você não fica sem rolê</p>
                <p>cadastre seu evento</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/banner3.png" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>FLUXO FEST</h5>
                <p>Aqui você não fica sem rolê</p>
                <p>cadastre seu evento</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
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

                $sql = "SELECT * FROM tb_eventos ORDER BY data ASC LIMIT 3";

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