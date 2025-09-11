<?php

namespace NFePHP\NFSe\Models\Smartpd\Factories\v100;

use NFePHP\NFSe\Models\Smartpd\Factories\Factory;

class ConsultarSituacaoLoteRps extends Factory
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
        $protocolo
    ) {
        return "<inscricaoMunicipal>$im</inscricaoMunicipal><recibo>&lt;recibo&gt;&lt;codrecibo&gt;$protocolo&lt;/codrecibo&gt;&lt;/recibo&gt;</recibo>";
    }
}
