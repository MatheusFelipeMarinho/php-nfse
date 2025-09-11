<?php

namespace NFePHP\NFSe\Models\Smartpd\Factories\v100;

use NFePHP\Common\DOMImproved as Dom;
use NFePHP\NFSe\Models\Smartpd\Factories\Signer;
use NFePHP\NFSe\Models\Smartpd\Factories\Factory;

class CancelarNfse extends Factory
{
    /**
     * Método usado para gerar o XML do Soap Request
     * @param $versao
     * @param $datacancelamento
     * @param $motivocancelamento
     * @param $inscricaoMunicipal
     * @param $nfseNumero
     * @return string
     */
    public function render(
        $versao,
        $datacancelamento,
        $motivocancelamento,
        $inscricaoMunicipal,
        $nfseNumero
    ) {
        $xsd = "cancelanfd";

        $dom = new Dom('1.0', 'utf-8');
        $dom->formatOutput = false;

        $tbnfd = $dom->createElement('tbnfd');
        $dom->appendChild($tbnfd);

        $nfd = $dom->createElement('nfd');
        //Adiciona as tags ao DOM
        $tbnfd->appendChild($nfd);

        /* Inscrição Municipal */
        $dom->addChild(
            $nfd,
            'inscricaomunicipalemissor',
            $inscricaoMunicipal,
            false,
            "Inscricao Municipal Emissor",
            false
        );

        /* Inscrição Municipal */
        $dom->addChild(
            $nfd,
            'numeronf',
            $nfseNumero,
            false,
            "numero nf",
            false
        );

        /* Inscrição Municipal */
        $dom->addChild(
            $nfd,
            'motivocancelamento',
            $motivocancelamento,
            false,
            "Motivo Cancelamento",
            false
        );

        /* Inscrição Municipal */
        $dom->addChild(
            $nfd,
            'datacancelamento',
            $datacancelamento,
            false,
            "Data Cancelamento",
            false
        );

        //Parse para XML
        $xml = str_replace('<?xml version="1.0" encoding="utf-8"?>', '', $dom->saveXML());

        $body = Signer::sign(
            $this->certificate,
            $xml,
            'tbnfd',
            '',
            $this->algorithm,
            [false, false, null, null],
            '',
            true
        );
        $body = $this->clear($body);
        //$this->validar($versao, $body, $this->schemeFolder, $xsd, '');

        return '<nfd><![CDATA[<?xml version="1.0" encoding="utf-8"?>' . $body . ']]></nfd>';
    }
}
