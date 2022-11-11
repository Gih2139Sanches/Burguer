<?php
require("../ConectaBanco.php");
$cpf_cnpj = "";
$fornecedor_ie = "";
$razao_social = "";
$nome_fantasia = "";

if (isset($_GET["alterar"])) {
  $id = htmlentities($_GET["alterar"]);
  $query = $mysqli->query("select * from fornecedor where id = '$id'");
  $tabela = $query->fetch_assoc();
  $cpf_cnpj = $tabela["cpf_cnpj"];
  $fornecedor_ie = $tabela["fornecedor_ie"];
  $razao_social = $tabela["razao_social"];
  $nome_fantasia = $tabela["nome_fantasia"];
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
</head>

<body>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização Dados - Fornecedores</title>

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
          <div>
            <label for="cpf_cnpj">CPF/CNPJ</label>
            <input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="000.000.000-00" maxlength="14" value="<?php echo $cpf_cnpj ?>">
          </div>
          <div>
            <label for="fornecedor_ie">IE</label>
            <input type="text" id="fornecedor_ie" name="fornecedor_ie" maxlength="14" value="<?php echo $fornecedor_ie ?>">
          </div>
          <div class="col-2">
            <label for="razao_social">Razão Social</label>
            <input type="text" class="text-transform" style="resize: none" id="razao_social" name="razao_social" placeholder="A Razão Social é o nome de registro de uma empresa, devidamente oficializado na Junta Comercial" maxlength="150" value="<?php echo $razao_social ?>">
          </div>
          <div class="col-2">
            <label for="nome_fantasia">Nome Fantasia</label>
            <input type="text" class="text-transform" style="resize: none" id="nome_fantasia" name="nome_fantasia" maxlength="150" placeholder="O nome fantasia é o nome popular da empresa “Coca Cola Indústrias Ltda” é, somente, “Coca-cola”." value="<?php echo $nome_fantasia ?>">
          </div>
          <div>
            <input type="submit" class="botao col-2" value="Salvar" name="botao">
        </form>
      </div>
      <a href="../CadastroFornecedor.php"><button class="botao col-2" name="voltar">Voltar</button></a>
    </div>
    </div>
    </div>
    <div id="popOk" class="container-popup">
      <div class="popup">
        <button class="fechar" id="fecharPopup">X</button>
        <h3 class="titulo">Preencha os Dados</h3>
        <form class="form" method="POST" action="CadastroCliente.php">
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
  $cpf_cnpj = htmlentities($_POST["cpf_cnpj"]);
  $fornecedor_ie = htmlentities($_POST["fornecedor_ie"]);
  $razao_social = htmlentities($_POST["razao_social"]);
  $nome_fantasia = htmlentities($_POST["nome_fantasia"]);

  $mysqli->query("update fornecedor set cpf_cnpj='$cpf_cnpj', fornecedor_ie='$fornecedor_ie', razao_social= '$razao_social', nome_fantasia='$nome_fantasia' where id='$id'");
  echo $mysqli->error;
  if ($mysqli->error == "") {
    echo "Alterado com sucesso";
  }
}
?>