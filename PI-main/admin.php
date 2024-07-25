<?php include "cabecalho.php" ?>

<body>
<main>
  <section class="container-admin-banner">
    <h1>Admistração Fluxo fest</h1>
    
  </section>
  <h2>Lista de Eventos</h2>

  
  <section class="container-table">
  <table class="table table-table-striped table-hover text-white">
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Descricão</th>
          <th>data</th>
          <th>foto</th>
          <th colspan="3">Ação</th>
        </tr>
      </thead>
      <tbody>
      <tr>

        <?php
        include "conexao.php";
        $sql = "select * from tb_eventos order by data asc";
        $resultado = mysqli_query($conexao, $sql);
                     
        while($umEvento = mysqli_fetch_assoc($resultado)){ 
        ?>

        <td><?=$umEvento['titulo'];?></td>
        <td><?=$umEvento['descricao'];?></td>
        <td><?=$umEvento['data'];?></td>
        <td><?=$umEvento['foto'];?></td>
        
        <td>
          <a class="botao-editar" href="editar-evento.php?id=<?=$umEvento['id']?>">Editar</a>
        </td>

        <td>
          <form>
            <a href="excluir.php?id=<?=$umEvento['id']?>" onclick="return confirm('Tem certeza que deseja excluir este produto?')" type="button" class="botao-excluir" value="Excluir">Excluir</a>
          </form>
        </td>
      
      </tr>
      </tbody>
      <?php } ?>
    </table>

  <a class="botao-cadastrar btn btn-dark" href="form-adicionar-evento.php">Cadastrar novo Evento</a>
  
    </form>
  </section>
</main>
</body>
</html>