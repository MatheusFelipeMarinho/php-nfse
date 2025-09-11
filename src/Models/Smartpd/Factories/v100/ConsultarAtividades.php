<?php

namespace NFePHP\NFSe\Models\Smartpd\Factories\v100;

use NFePHP\Common\DOMImproved as Dom;
use NFePHP\NFSe\Models\Smartpd\Factories\Factory;

class ConsultarAtividades extends Factory
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
        $codigoMunicipio
    ) {
        return "<inscricaoMunicipal>$im</inscricaoMunicipal>
        <codigoMunicipio>$codigoMunicipio</codigoMunicipio>";
    }
}
