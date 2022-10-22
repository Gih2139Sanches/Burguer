<?php
session_start();
$erro_validacao = 0;

if (isset($_POST["botao"])) {
  $_SESSION["nomeProduto"] = $_POST["nomeProduto"];
  $_SESSION["preco"] = $_POST["preco"];
  $_SESSION["tipo"] = $_POST["tipo"];
  $_SESSION["dt_pedido"] = $_POST["dt_pedido"];

  if ($erro_validacao == 0) {
    Header("location: ./Produto/adiciona.php");
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produto</title>

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
      <span class="space"></span>
      <a href="CadastroCliente.php">Cad.Cliente</a>
      <a href="CadastroProduto.php">Cad.Produto</a>
      <a href="#"></a>
    </nav>

    <a href="#"></a>

    <a href="#home" class="logo"><img src="../images/logo.png" alt=""></a>

    <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search icons"></label>
    </form>
  </header>

  <section class="container-table">
    <div class="heading">
      <img src="../images/title-img.png" alt="">
      <h3>Cadastro de Produto</h3>
    </div>
    <div class="container-botao">
      <a href=""><button class="botao" id="adicionar">Adicionar</button></a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="./Botoes/pesquisaProduto.php"><button class="botao">Pesquisar</button></a>
    </div>


    <div class="table_responsive">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>TIPO</th>
            <th>DATA DO PEDIDO</th>
            <th>AÇÃO</th>
          </tr>
        </thead>

        <?php
        // conexao com o banco de dados
        require("ConectaBanco.php");

        // executar comandos sql
        // consulta registros da tabela
        $query = $mysqli->query("select * from produto");
        echo $mysqli->error;

        // carrega consulta de registros
        while ($tabela = $query->fetch_assoc()) {
          echo "
			<tr><td align='center'>$tabela[id]</td>
			<td align='center'>$tabela[nomeProduto]</td>
      <td align='center'>$tabela[preco]</td>
      <td align='center'>$tabela[tipo]</td>
      <td align='center'>$tabela[dt_pedido]</td>
			
			<td width='120'><a href='./Produto/excluir.php?excluir=$tabela[id]'>[excluir]</a>
			
			<a href='./Produto/alterar.php?alterar=$tabela[id]'>[alterar]</a></td>
			</tr>
			";
        }
        ?>
      </table>
      <div id="popId" class="container-popup ">
        <div class="popup">
          <button class="fechar" id="fecharPopup">X</button>
          <h3 class="titulo">Preencha os Dados</h3>
          <form class="form" method="POST" action="./Produto/adiciona.php">
            <div class="col-2">
              <label for="nomeProduto">Nome</label>
              <input type="text" id="nomeProduto" name="nomeProduto" maxlength="40" value="<?php if (isset($_SESSION["nomeProduto"])) echo $_SESSION["nomeProduto"] ?>">
            </div>
            <div>
              <label for="preco">Preco</label>
              <input type="number" id="preco" name="preco" placeholder="R$00,00" maxlength="7" value="<?php if (isset($_SESSION["preco"])) echo $_SESSION["preco"] ?>">
            </div>
            <div>
              <label for="tipo">Tipo</label>
              <input type="text" id="tipo" name="tipo" maxlength="20" value="<?php if (isset($_SESSION["tipo"])) echo $_SESSION["tipo"] ?>">
            </div>
            <div class="col-2">
              <label for="dt_pedido">Data do Pedido</label>
              <input type="date" id="dt_pedido" name="dt_pedido" placeholder="00-00-0000" value="<?php if (isset($_SESSION["dt_pedido"])) echo $_SESSION["dt_pedido"] ?>">
            </div>
            <div>
              <button type="submit" class="botao col-2" name="botao">Enviar</button></a>
            </div>
          </form>
        </div>
      </div>
  </section>
  <script src="../js/script.js"></script>
</body>

</html>