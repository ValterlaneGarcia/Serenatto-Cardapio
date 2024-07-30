<?php
require_once 'vendor/autoload.php';

use Dbseller\ProjetoInicial\Infra\Persistence\ConexaoBd;
use Dbseller\ProjetoInicial\Repositorio\ProdutoRepositorio;

$pdo = ConexaoBd::createConnection();

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

header('Location: admin');