<?php
require 'autoload.php';
$retorno = \WebMatrixIDC\Boleto\Cnab\Retorno\Factory::make(__DIR__ . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR . 'bnb.ret');
$retorno->processar();

echo $retorno->getBancoNome();
dd($retorno->getDetalhes());
