<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesquisa de Fornecedor</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
  <header class="header">

    <div id="menu-btn" class="fas fa-bars icons"></div>
    <div id="search-btn"></div>

    <nav class="navbar">
      <a href="../../index.php">home</a>
      <a href="../../index.php#menu">menu</a>
      <a href="../../index.php#about">Sobre</a>
      <span class="space"></span>
      <a href="../CadastroCliente.php">Cad.Cliente</a>
      <a href="../CadastroProduto.php">Cad.Produto</a>
      <a href="#"></a>
    </nav>

    <a href="#"></a>

    <a href="#home" class="logo"><img src="../../images/logo.png" alt=""></a>

    <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search icons"></label>
    </form>
  </header>

  <section class="container-table">
    <div class="heading">
      <img src="../../images/title-img.png" alt="">
      <h3>Pesquisa de Fornecedor</h3>
    </div>

    <form class="form" method="POST" action="pesquisaFornecedor.php">
      <div class="pesquisa">
        <label class="item-pesquisa space nome-inteiro-medio" for="nome_fantasia">Nome Fantasia:</label>
        <input class="item-pesquisa" type="text" id="nome" name="nome_fantasia" maxlength="40" placeholder="digite aqui....">
        <button type="submit" class="botao col-2 item-pesquisa" name="botao">Pesquisar</button>
      </div>
    </form>

    <div class="table_responsive2">

      <?php
      if (isset($_POST["botao"])) {
        require("../ConectaBanco.php");
        $nome_fantasia = htmlentities($_POST["nome_fantasia"]);

        // gravando dados
        $query = $mysqli->query("select * from fornecedor where nome_fantasia like '%$nome_fantasia%'");
        echo $mysqli->error;

        echo "
				<table>
				<thead>
          <tr>
          <th>ID</th>
          <th>CPF/CNPJ</th>
          <th>IE</th>
          <th>RAZÃO SOCIAL</th>
          <th>NOME FANTASIA</th>
          </tr>
        </thead>
			";
        while ($tabela = $query->fetch_assoc()) {
          echo "
				<tr><td align='center'>$tabela[id]</td>
				<td align='center'>$tabela[cpf_cnpj]</td>
        <td align='center'>$tabela[fornecedor_ie]</td>
			  <td align='center'>$tabela[razao_social]</td>
			  <td align='center'>$tabela[nome_fantasia]</td>
				</tr>
			";
        }
        echo "</table>";
      }
      ?>
    </div>
    <a href='../CadastroFornecedor.php'><button class="botao col-2" name="botao">Voltar</button></a>
</body>

</html>