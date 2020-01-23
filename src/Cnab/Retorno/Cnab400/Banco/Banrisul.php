<?php
namespace WebMatrixIDC\Boleto\Cnab\Retorno\Cnab400\Banco;

use WebMatrixIDC\Boleto\Cnab\Retorno\Cnab400\AbstractRetorno;
use WebMatrixIDC\Boleto\Contracts\Boleto\Boleto as BoletoContract;
use WebMatrixIDC\Boleto\Contracts\Cnab\RetornoCnab400;
use WebMatrixIDC\Boleto\Util;

class Banrisul extends AbstractRetorno implements RetornoCnab400
{
    /**
     * Código do banco
     *
     * @var string
     */
    protected $codigoBanco = BoletoContract::COD_BANCO_BANRISUL;



    protected function processarHeader(array $header)
    {
        return true;
    }

    protected function processarDetalhe(array $detalhe)
    {
        return true;
    }

    protected function processarTrailer(array $trailer)
    {
        return true;
    }
}
