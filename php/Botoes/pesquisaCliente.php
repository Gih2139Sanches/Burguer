<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesquisa de Cliente</title>

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
      <span class="space"><a href="../../index.php" class="logo"><img src="../../images/logo.png"></a></span>
      <a href="../CadastroProduto.php">Cad.Produto</a>
      <a href="../CadastroFornecedor.php">Cad.Fornec</a>
    </nav>

    <a href="#"></a>

    <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search icons"></label>
    </form>
  </header>

  <section class="container-table">
    <div class="heading">
      <img src="../../images/title-img.png" alt="">
      <h3>Pesquisa de Cliente</h3>
    </div>

    <form class="form" method="POST" action="pesquisaCliente.php">
      <div class="pesquisa">
        <label class="item-pesquisa space" for="nome">Nome:</label>
        <input class="item-pesquisa" type="text" id="nome" name="nome" maxlength="40" placeholder="digite aqui....">
        <button type="submit" class="botao col-2 item-pesquisa" name="botao">Pesquisar</button>
      </div>
    </form>

    <div class="table_responsive2">

      <?php
      if (isset($_POST["botao"])) {
        require("../ConectaBanco.php");
        $nome = htmlentities($_POST["nome"]);

        // gravando dados
        $query = $mysqli->query("select * from cliente where nome like '%$nome%'");
        echo $mysqli->error;

        echo "
				<table>
				<thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>CPF</th>
            <th>TELEFONE</th>
          </tr>
        </thead>
			";
        while ($tabela = $query->fetch_assoc()) {
          echo "
				<tr><td align='center'>$tabela[id]</td>
				<td align='center'>$tabela[nome]</td>
        <td align='center'>$tabela[email]</td>
        <td align='center'>$tabela[cpf]</td>
        <td align='center'>$tabela[tel]</td>
				</tr>
			";
        }
        echo "</table>";
      }
      ?>
    </div>
    <a href='../CadastroCliente.php'><button class="botao col-2" name="botao">Voltar</button></a>
</body>

</html>