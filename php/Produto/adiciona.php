<?php
session_start();
?>

<?php
if (isset($_POST["botao"])) {
  require("../ConectaBanco.php");

  $_SESSION["nomeProduto"] = $_POST["nomeProduto"];
  $_SESSION["preco"] = $_POST["preco"];
  $_SESSION["tipo"] = $_POST["tipo"];
  $_SESSION["dt_pedido"] = $_POST["dt_pedido"];

  $nomeProduto = htmlentities($_POST["nomeProduto"]);
  $preco = htmlentities($_POST["preco"]);
  $tipo = htmlentities($_POST["tipo"]);
  $dt_pedido = htmlentities($_POST["dt_pedido"]);

  $mysqli->query("insert into produto values('', '$nomeProduto', '$preco', '$tipo', '$dt_pedido')");
  echo $mysqli->error;

  if ($mysqli->error == "") {
    Header("Location: ../CadastroProduto.php");
  }
}
