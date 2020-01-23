<?php
namespace WebMatrixIDC\Boleto\Contracts\Cnab;

interface Remessa extends Cnab
{
    public function gerar();
}
