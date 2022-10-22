<?php
require("../ConectaBanco.php");
$nomeProduto = "";
$preco = "";
$tipo = "";
$dt_pedido = "";

if (isset($_GET["alterar"])) {
  $id = htmlentities($_GET["alterar"]);
  $query = $mysqli->query("select * from produto where id = '$id'");
  $tabela = $query->fetch_assoc();
  $nomeProduto = $tabela["nomeProduto"];
  $preco = $tabela["preco"];
  $tipo = $tabela["tipo"];
  $dt_pedido = $tabela["dt_pedido"];
}
?>

<!DOCTYPE html>
<html>

<body>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="../../css/style.css">
  </head>

  <body>
    <div id="popId" class="container-popup2">
      <div class="popup2">
        <h3 class="titulo">Atualize os Dados</h3>
        <form class="form" method="POST" action="alterar.php">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <div class="col-2">
            <label for="nomeProduto">Nome</label>
            <input type="text" id="nomeProduto" name="nomeProduto" maxlength="40" value="<?php echo $nomeProduto ?>">
          </div>
          <div>
            <label for="preco">Preco</label>
            <input type="number" id="preco" name="preco" placeholder="R$00,00" maxlength="7" value="<?php echo $preco ?>">
          </div>
          <div>
            <label for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" maxlength="20" value="<?php echo $tipo ?>">
          </div>
          <div class="col-2">
            <label for="dt_pedido">Data do Pedido</label>
            <input type="date" id="dt_pedido" name="dt_pedido" placeholder="00-00-0000" value="<?php echo $dt_pedido ?>">
          </div>
          <div>
            <input type="submit" class="botao col-2" value="Salvar" name="botao">
        </form>
      </div>
      <a href="../CadastroProduto.php"><button class="botao col-2" name="voltar">Voltar</button></a>
    </div>
    </div>
    </div>
    <div id="popOk" class="container-popup">
      <div class="popup">
        <button class="fechar" id="fecharPopup">X</button>
        <h3 class="titulo">Preencha os Dados</h3>
        <form class="form" method="POST" action="CadastroProduto.php">
          <div>

            <div>
              <button type="submit" class="botao col-2" name="botao">Enviar</button>
            </div>
        </form>
      </div>
    </div>
    <script src="../../js/script.js"></script>
  </body>

</html>


<?php
if (isset($_POST["botao"])) {

  $id   = htmlentities($_POST["id"]);
  $nomeProduto = htmlentities($_POST["nomeProduto"]);
  $preco = htmlentities($_POST["preco"]);
  $tipo = htmlentities($_POST["tipo"]);
  $dt_pedido = htmlentities($_POST["dt_pedido"]);

  $mysqli->query("update produto set nomeProduto='$nomeProduto', preco='$preco', tipo='$tipo', dt_pedido='$dt_pedido' where id='$id' ");
  echo $mysqli->error;
  if ($mysqli->error == "") {
    echo "Alterado com sucesso";
  }
}
?>