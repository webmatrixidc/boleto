<?php
namespace WebMatrixIDC\Boleto\Contracts\Boleto\Render;

interface Pdf
{
    public function gerarBoleto($dest = self::OUTPUT_STANDARD, $save_path = null);
}
