<?php
namespace WebMatrixIDC\Boleto\Contracts\Boleto\Render;

interface Html
{
    public function getImagemCodigoDeBarras($codigo_barras);

    public function gerarBoleto();
}
