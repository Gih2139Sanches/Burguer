<?php
$domain = "localhost";  // localização
$user = "root";      // usuário
$password = "";      // senha
$database = "aula08";  // banco de dados	

// instanciando a classe mysqli
$mysqli = new mysqli($domain, $user, $password, $database);

// criação das tabelas
$sql_1 = "create table cliente(
  id     int(2)        primary key,
  nome   varchar(40)   not null,
  email  varchar(40)   not null,
  cpf    varchar(14)   not null,
  tel    varchar(12)   not null,
)";

$sql_2 = "create table produto(
  id            int(2)        primary key,
  nomeProduto   varchar(40)   not null,
  preco         decimal(7,2)  not null,
  tipo          varchar(20)   not null,
  dt_pedido     date          not null,
)";
if ($mysqli->query($sql_1) === TRUE && $mysqli->query($sql_2) === TRUE) {
  echo "Tabela de cliente e produto criada com sucesso!";
}

if ($mysqli->connect_error) {

  echo "Não foi possível conectar com o banco de dados ";
  echo $mysqli->connect_error; // mostra causa do erro
}
