<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <form name="produto" action="incluir.php" method="post">
    
    <title>Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.js">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>

    <h1> <center>Cadastro Produtos.</center></h1>

    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend> <center>SHEEEEEEEEEEEEEEEEESH</center></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="codigo">Código:</label>  
  <div class="col-md-4">
  <input id="codigo" name="codigo" type="text" placeholder="Digite o código" class="form-control input-md" required="">    
  </div>
</div>

<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="produto">Produto:</label>  
  <div class="col-md-4">
  <input id="produto" name="produto" type="text" placeholder="Digite o produto" class="form-control input-md" required="">
    
  </div>
</div>

<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição:</label>  
  <div class="col-md-4">
  <input id="descricao" name="descricao" type="text" placeholder="Descrição" class="form-control input-md">    
  </div>
</div>

<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data">Data:</label>  
  <div class="col-md-4">
  <input id="data" name="data" type="text" placeholder="xx/xx/xxxx" class="form-control input-md">
  </div>
</div>

<br>
<br>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton"></label>
  <div class="col-md-4">
    <input id="filebutton" name="imagem" class="input-file" type="file">
  </div>
</div>

<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valor">Valor:</label>  
  <div class="col-md-4">
  <input id="valor" name="valor" type="text" placeholder="Digite o Valor" class="form-control input-md">
  </div>
</div>

<br>
<br>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Cadastrar</button>
    <button id="button2id" name="button2id" class="btn btn-warning">Listar Produtos</button>
  </div>
</div>

</fieldset>
</form>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  </body>
</html>