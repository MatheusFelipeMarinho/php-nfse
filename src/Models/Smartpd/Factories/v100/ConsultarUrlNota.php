<?php

namespace NFePHP\NFSe\Models\Smartpd\Factories\v100;

use NFePHP\Common\DOMImproved as Dom;
use NFePHP\NFSe\Models\Smartpd\Factories\Factory;

class ConsultarUrlNota extends Factory
{
    /**
     * Método usado para gerar o XML do Soap Request
     * @param $versao
     * @param $remetenteCNPJCPF
     * @param $im
     * @param $protocolo
     * @return mixed
     */
    public function render(
        $im,
        $codigoMunicipio,
        $numeroNfse,
        $serieNfse
    ) {
        return "<codigoMunicipio>$codigoMunicipio</codigoMunicipio><numeroNfd>$numeroNfse</numeroNfd><serieNfd>$serieNfse</serieNfd><inscricaoMunicipal>$im</inscricaoMunicipal>";
    }
}
