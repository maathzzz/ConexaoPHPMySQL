<html>
<title> PHP com MySQL</title>
<body>
<h3> Novo Produto </h3>
<?php
    include_once('conexao.php');
    // recuperando
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $descricao= $_POST['descricao'];
    $imagem = $_POST['imagem'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $sqlinsert = "insert into tabelaimg(codigo, produto, descricao, data, imagem, valor) values ('$codigo', '$produto', '$descricao', '$data', '$imagem', $valor)";
    $resultado = mysqli_query($conexao, $sqlinsert);
    if (!$resultado) {
    	die('Query Inválida: '.mysqli_error($conexao));
    } else {
    	echo "Registro Cadastrado com Sucesso";
    }
    mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='frm_cadastro_produtos.php';" value="Voltar">
</body>
</html>