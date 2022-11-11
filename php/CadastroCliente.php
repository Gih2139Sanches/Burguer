<?php
session_start();
$erro_validacao = 0;

if (isset($_POST["botao"])) {
  $_SESSION["nome"] = $_POST["nome"];
  $_SESSION["cpf"] = $_POST["cpf"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["tel"] = $_POST["tel"];

  if ($erro_validacao == 0) {
    Header("location: ./Cliente/adiciona.php");
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cliente</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header class="header">

    <div id="menu-btn" class="fas fa-bars icons"></div>
    <div id="search-btn"></div>

    <nav class="navbar">
      <a href="../index.php">home</a>
      <a href="../index.php#menu">menu</a>
      <a href="../index.php#about">Sobre</a>
      <span class="space"><a href="../index.php" class="logo"><img src="../images/logo.png"></a></span>
      <a href="CadastroFornecedor.php">Cad.Fornec</a>
      <a href="CadastroProduto.php">Cad.Produto</a>
    </nav>

    <a href="#"></a>

    <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search icons"></label>
    </form>
  </header>

  <section class="container-table">
    <div class="heading">
      <img src="../images/title-img.png" alt="">
      <h3>Cadastro de Cliente</h3>
    </div>
    <div class="container-botao">
      <a href=""><button class="botao" id="adicionar">Adicionar</button></a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="./Botoes/pesquisaCliente.php"><button class="botao">Pesquisar</button></a>
    </div>


    <div class="table_responsive">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>AÇÃO</th>
          </tr>
        </thead>

        <?php
        // conexao com o banco de dados
        require("ConectaBanco.php");

        // executar comandos sql
        // consulta registros da tabela
        $query = $mysqli->query("select * from cliente");
        echo $mysqli->error;

        // carrega consulta de registros
        while ($tabela = $query->fetch_assoc()) {
          echo "
			<tr><td align='center'>$tabela[id]</td>
      <td align='center'>$tabela[nome]</td>
      <td align='center'>$tabela[email]</td>
			<td align='center'>$tabela[cpf]</td>
			<td align='center'>$tabela[tel]</td>
			
			<td width='120'><a href='./Cliente/excluir.php?excluir=$tabela[id]'>[excluir]</a>
			
			<a href='./Cliente/alterar.php?alterar=$tabela[id]'>[alterar]</a></td>
			</tr>
			";
        }
        ?>
      </table>
      <div id="popId" class="container-popup ">
        <div class="popup">
          <button class="fechar" id="fecharPopup">X</button>
          <h3 class="titulo">Preencha os Dados</h3>
          <form class="form" method="POST" action="./Cliente/adiciona.php">
            <div>
              <label for="cpf">CPF</label>
              <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="14" value="<?php if (isset($_SESSION["cpf"])) echo $_SESSION["cpf"] ?>">
            </div>
            <div>
              <label for="tel">Telefone</label>
              <input type="text" id="tel" name="tel" placeholder="(00)0000-0000" maxlength="12" value="<?php if (isset($_SESSION["tel"])) echo $_SESSION["tel"] ?>">
            </div>
            <div class="col-2">
              <label for="nome">Nome</label>
              <input type="text" id="nome" name="nome" maxlength="40" value="<?php if (isset($_SESSION["nome"])) echo $_SESSION["nome"] ?>">
            </div>
            <div class="col-2">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" maxlength="40" placeholder="exemplo@gmail.com" value="<?php if (isset($_SESSION["email"])) echo $_SESSION["email"] ?>">
            </div>
            <div>
              <button class="botao col-2" type="submit" name="botao">Enviar</button>
            </div>
          </form>
        </div>
      </div>
  </section>
  <script src="../js/script.js"></script>
</body>

</html>