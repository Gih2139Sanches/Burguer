<?php
session_start();
$erro_validacao = 0;

if (isset($_POST["botao"])) {
  $_SESSION["cpf_cnpj"] = $_POST["cpf_cnpj"];
  $_SESSION["fornecedor_ie"] = $_POST["fornecedor_ie"];
  $_SESSION["razao_social"] = $_POST["razao_social"];
  $_SESSION["razao_social"] = $_POST["razao_social"];

  if ($erro_validacao == 0) {
    Header("location: ./Fornecedor/adiciona.php");
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Fornecedor</title>

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
      <a href="CadastroCliente.php">Cad.Cliente</a>
      <a href="CadastroProduto.php">Cad.Produto</a>
      <a href="#"></a>
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
      <h3>Cadastro de Fornecedor</h3>
    </div>
    <div class="container-botao">
      <a href=""><button class="botao" id="adicionar">Adicionar</button></a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="./Botoes/pesquisaFornecedor.php"><button class="botao">Pesquisar</button></a>
    </div>


    <div class="table_responsive">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>CPF/CNPJ</th>
            <th>IE</th>
            <th>RAZÃO SOCIAL</th>
            <th>NOME FANTASIA</th>
            <th>AÇÃO</th>
          </tr>
        </thead>

        <?php
        // conexao com o banco de dados
        require("ConectaBanco.php");

        // executar comandos sql
        // consulta registros da tabela
        $query = $mysqli->query("select * from fornecedor");
        echo $mysqli->error;

        // carrega consulta de registros
        while ($tabela = $query->fetch_assoc()) {
          echo "
			<tr><td align='center'>$tabela[id]</td>
      <td align='center'>$tabela[cpf_cnpj]</td>
      <td align='center'>$tabela[fornecedor_ie]</td>
			<td align='center'>$tabela[razao_social]</td>
			<td align='center'>$tabela[nome_fantasia]</td>
			
			<td width='120'><a href='./Fornecedor/excluir.php?excluir=$tabela[id]'>[excluir]</a>
			
			<a href='./Fornecedor/alterar.php?alterar=$tabela[id]'>[alterar]</a></td>
			</tr>
			";
        }
        ?>
      </table>
      <div id="popId" class="container-popup ">
        <div class="popup">
          <button class="fechar" id="fecharPopup">X</button>
          <h3 class="titulo">Preencha os Dados</h3>
          <form class="form" method="POST" action="./Fornecedor/adiciona.php">
            <div>
              <label for="cpf_cnpj">CPF/CNPJ</label>
              <input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="000.000.000-00" maxlength="14" value="<?php if (isset($_SESSION["cpf_cnpj"])) echo $_SESSION["cpf_cnpj"] ?>">
            </div>
            <div>
              <label for="fornecedor_ie">Inscrição Estadual (IE)</label>
              <input type="text" id="fornecedor_ie" name="fornecedor_ie" placeholder="00000000-0" maxlength="14" value="<?php if (isset($_SESSION["fornecedor_ie"])) echo $_SESSION["fornecedor_ie"] ?>">
            </div>
            <div class="col-2">
              <label for="razao_social">Razão Social</label>
              <textarea class="text-transform" style="resize: none" id="razao_social" name="razao_social" placeholder="Ex: A Razão Social é o nome de registro de uma empresa" maxlength="150" value="<?php if (isset($_SESSION["razao_social"])) echo $_SESSION["razao_social"] ?>"></textarea>
            </div>
            <div class="col-2">
              <label for="nome_fantasia">Nome Fantasia</label>
              <textarea class="text-transform" style="resize: none" id="nome_fantasia" name="nome_fantasia" maxlength="150" placeholder="Ex: O Nome Fantasia é o nome popular de uma empresa “Coca-cola”." value="<?php if (isset($_SESSION["nome_fantasia"])) echo $_SESSION["nome_fantasia"] ?>"></textarea>
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