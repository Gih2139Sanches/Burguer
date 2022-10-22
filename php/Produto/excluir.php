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
    <title>Excluir Produto</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <div class="background" id="check" for="check"></div>
  <div class="alert_box" id="check">
    <div class="icon">
      <i class="fas fa-exclamation"></i>
    </div>
    <header>Alerta</header>
    <p>Você deseja apagar este Dado?</p>
    <div class="btns">
      <a href='confirma.php?passa=<?= $_GET["excluir"] ?>'><label name="deletar" value="deletar">SIM, Deletar!</label></a>
      <a href='../CadastroProduto.php'><label>Cancelar</label></a>
    </div>
  </div>
</body>

</html>