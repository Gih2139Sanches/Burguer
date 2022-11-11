<?php
session_start();
?>

<?php
if (isset($_POST["botao"])) {
  require("../ConectaBanco.php");

  $_SESSION["cpf_cnpj"] = $_POST["cpf_cnpj"];
  $_SESSION["fornecedor_ie"] = $_POST["fornecedor_ie"];
  $_SESSION["razao_social"] = $_POST["razao_social"];
  $_SESSION["razao_social"] = $_POST["razao_social"];

  $cpf_cnpj = htmlentities($_POST["cpf_cnpj"]);
  $fornecedor_ie = htmlentities($_POST["fornecedor_ie"]);
  $razao_social = htmlentities($_POST["razao_social"]);
  $nome_fantasia = htmlentities($_POST["nome_fantasia"]);

  $mysqli->query("insert into fornecedor values ('', '$cpf_cnpj', '$fornecedor_ie', '$razao_social', '$nome_fantasia')");
  echo $mysqli->error;

  if ($mysqli->error == "") {
    Header("Location: ../CadastroFornecedor.php");
  }
}
