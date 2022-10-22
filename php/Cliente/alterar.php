<?php
require("../ConectaBanco.php");
$nome = "";
$email = "";
$cpf = "";
$tel = "";

if (isset($_GET["alterar"])) {
  $id = htmlentities($_GET["alterar"]);
  $query = $mysqli->query("select * from cliente where id = '$id'");
  $tabela = $query->fetch_assoc();
  $nome = $tabela["nome"];
  $email = $tabela["email"];
  $cpf = $tabela["cpf"];
  $tel = $tabela["tel"];
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
          <div>
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="14" value="<?php echo $cpf ?>">

          </div>
          <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="tel" placeholder="(00)0000-0000" maxlength="12" value="<?php echo $tel ?>">
          </div>
          <div class="col-2">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" maxlength="40" value="<?php echo $nome ?>">
          </div>
          <div class="col-2">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" maxlength="40" value="<?php echo $email ?>">
          </div>
          <div>
            <input type="submit" class="botao col-2" value="Salvar" name="botao">
        </form>
      </div>
      <a href="../CadastroCliente.php"><button class="botao col-2" name="voltar">Voltar</button></a>
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
  $nome = htmlentities($_POST["nome"]);
  $email = htmlentities($_POST["email"]);
  $cpf  = htmlentities($_POST["cpf"]);
  $tel  = htmlentities($_POST["tel"]);

  $mysqli->query("update cliente set nome='$nome', email = '$email', cpf = '$cpf', tel ='$tel' where id = '$id' ");
  echo $mysqli->error;
  if ($mysqli->error == "") {
    echo "Alterado com sucesso";
  }
}
?>