<?php
  include_once('conexao.php')
?>

<html> 
<head> 
	<meta charset="utf-8">
	<title> Sistemas de Cadastro de Produtos</title>
	  <link rel="stylesheet" href="css/materialize.min.css">
	  <meta name="viewport" content="width=device-width, initial-sacale=1.0"/>
</head>
<body>
	<div class="row">
		<div class="col s12 m8 push-m2">
			<h3 class="light"> Produtos Cadastrados </h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Código</th>
						<th>Produtos</th>
						<th>Descrição</th>
                        <th>Data</th>
						<th>Imagem</th>
						<th>Valor</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$sql = "SELECT * FROM tabelaimg";
					$resultado = mysqli_query($conexao, $sql);

					if (mysqli_num_rows($resultado) > 0) {
						while($dados = mysqli_fetch_array($resultado)){
							echo "<tr>";
                            echo "<td>".  $dados['codigo']. "</td>";
                            echo "<td>".  $dados['produto']. "</td>";
                            echo "<td>".  $dados['descricao']. "</td>";
                            echo "<td align='right'> R$ ". $dados['valor']. "</td>";

                            // buscando na imagem
                            if(empty($dados['imagem'])){
                            	$imagem = 'SemImagem.png';
                            } 
                            else{
                            	$imagem = $dados['imagem'];
                            }
                            $id = $dados['id'];
                            echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
                            echo "<td align='center'><a href='alterar.php?id=$id'>Alterar </a>";
                            echo "<td align='center'><a href='excluir.php?id=$id'>Excluir </a>";
                            echo "</tr>";
							?>
				<!--			
				<tr>
					<td><?php echo $dados['codigo']; ?></td>
					<td><?php echo $dados['produto']; ?></td>
					<td><?php echo $dados['descricao']; ?></td>
                    <td><?php echo $dados['data']; ?></td>
					<td><?php echo $dados['imagem']; ?></td>
					<td><?php echo $dados['valor']; ?></td>
				</tr> -->

				<?php
				}
			    }

			    ?>
				</tbody>
			</table>
			<br>
			<a href="frm_cadastro_produtos.html" class="btn">Adicionar Produtos</a>
		</div>
	</div>
	  <script type="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
	  </script>
</body>
</html>