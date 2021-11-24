<html> 
<head> 
	<meta charset="utf-8">
	<title> Sistemas de Cadastro de Produtos</title>
	  <link rel="stylesheet" href="css/materialize.min.css">
	  <meta name="viewport" content="width=device-width, initial-sacale=1.0"/>
</head>
<body>
<div class="row">
  <div class="col s12 m6 push-m3">
        <h3 class="light"> Alterar Produtos </h3>

        <?php
          include_once('conexao.php');

          if(isset($_GET['id']))
          {
            $id = $_GET['id'];
            $sql = "SELECT * FROM tabelaimg WHERE id = '$id'";
            $resultado = mysqli_query($conexao, $sql);
            $dados = mysqli_fetch_array($resultado);
          }
          ?>

          <form action="uptade.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['codigo'];?>">

            <div class="input-field col s12">
            <input type="text" name="codigo" id="codigo" value="<?php echo $dados['codigo'];?>">
            <label for="nome">Codigo</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="produto" value="<?php echo $dados['produto'];?>" id="produto">
            <label for="produto">Produto</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="descricao" value="<?php echo $dados['descricao'];?>" id="descricao">
            <label for="produto">Descrição</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="valor" value="<?php echo $dados['valor'];?>" id="valor">
            <label for="produto">Valor</label>
          </div>

          <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
          <a href="consulta.php" class="btn green"> Lista de Produtos </a>           
          </form>
  </div>
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
 </body>
 </html>


          	
