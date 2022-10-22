<?php
if (isset($_GET["passa"])) {
  $id = htmlentities($_GET["passa"]);
  require("../ConectaBanco.php");
  $mysqli->query("delete from produto where id = '$id'");
  echo $mysqli->error;
  if ($mysqli->error == "") {
    header('Location: ../CadastroProduto.php');
  }
}
