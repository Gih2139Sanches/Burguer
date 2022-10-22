<?php
session_start();
?>

<?php
if (isset($_POST["botao"])) {
  require("../ConectaBanco.php");

  $_SESSION["nome"] = $_POST["nome"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["cpf"] = $_POST["cpf"];
  $_SESSION["tel"] = $_POST["tel"];

  $nome = htmlentities($_POST["nome"]);
  $email = htmlentities($_POST["email"]);
  $cpf = htmlentities($_POST["cpf"]);
  $tel = htmlentities($_POST["tel"]);

  $mysqli->query("insert into cliente values ('', '$nome', '$email', '$cpf', '$tel')");
  echo $mysqli->error;

  if ($mysqli->error == "") {
    Header("Location: ../CadastroCliente.php");
  }
}
