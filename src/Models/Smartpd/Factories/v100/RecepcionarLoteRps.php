<?php

namespace NFePHP\NFSe\Models\Smartpd\Factories\v100;

use NFePHP\NFSe\Models\Smartpd\Rps;
use NFePHP\Common\DOMImproved as Dom;
use NFePHP\NFSe\Models\Smartpd\Factories\Signer;
use NFePHP\NFSe\Models\Smartpd\Factories\Factory;

class RecepcionarLoteRps extends Factory
{
    /**
     * @var DOMImproved
     */
    protected static $dom;

    /**
     * Método usado para gerar o XML do Soap Request
     * @param $versao
     * @param $lote
     * @param $rpss
     * @return mixed
     */
    public function render(
        $versao,
        $lote,
        $rpss
    ) {
        $xsd = "envialote";

        $dom = new Dom('1.0', 'utf-8');
        $dom->formatOutput = false;

        $tbnfd = $dom->createElement('tbnfd');
        $dom->appendChild($tbnfd);

        foreach ($rpss as $rps) {
            self::appendRps($rps, $dom, $tbnfd, $lote);
        }

        //Parse para XML
        $xml = $this->clear($dom->saveXML());
        $this->validar($versao, $xml, $this->schemeFolder, $xsd, '', $this->cmun);

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
        
        #echo '<pre>'.print_r($body).'</pre>';die;
        return "<codigoMunicipio>{$rps->codigocidade}</codigoMunicipio><nfd><![CDATA[$body]]></nfd>";
    }


    /**
     * Monta o xml com base no objeto Rps
     * @param Rps $rps
     * @return string
     */
    protected static function appendRps(Rps $rps, &$dom, &$tbnfd, $lote)
    {
        self::$dom = $dom;
        $nfd =  self::$dom->createElement("nfd");

        $tbnfd->appendChild($nfd);

        self::$dom->addChild(
            $nfd,
            'numeronfd',
            $rps->numeronfd,
            true,
            "Numero da nota fiscal",
            false
        );

        self::$dom->addChild(
            $nfd,
            'codseriedocumento',
            $rps->codseriedocumento,
            true,
            "Serie do documento",
            false
        );

        self::$dom->addChild(
            $nfd,
            'codnaturezaoperacao',
            $rps->codnaturezaoperacao,            
            true,
            "Serie do documento",
            false
        );

        self::$dom->addChild(
            $nfd,
            'codigocidade',
            $rps->codigocidade,
            true,
            "Serie do documento",
            false
        );

        self::$dom->addChild(
            $nfd,
            'inscricaomunicipalemissor',
            $rps->inscricaomunicipalemissor,
            true,
            'Inscricao Municipal Emissor',
            false
        );

        self::$dom->addChild(
            $nfd,
            'dataemissao',
            $rps->dataemissao->format('d/m/Y'),
            true,
            'Data de Emissão da nota fiscal',
            false
        );

        self::$dom->addChild(
            $nfd,
            'razaotomador',
            $rps->razaotomador,
            true,
            'Razao Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'nomefantasiatomador',
            $rps->nomefantasiatomador,
            true,
            'Nome fantasia Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'enderecotomador',
            $rps->enderecotomador,
            true,
            'Endereco Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'cidadetomador',
            $rps->cidadetomador,
            true,
            'Cidade Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'estadotomador',
            $rps->estadotomador,
            true,
            'Estado Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'paistomador',
            $rps->paistomador,
            true,
            'Pais Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'fonetomador',
            $rps->fonetomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'faxtomador',
            '',
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'ceptomador',
            $rps->ceptomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'bairrotomador',
            $rps->bairrotomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'emailtomador',
            $rps->emailtomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'cpfcnpjtomador',
            $rps->cpfcnpjtomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'inscricaoestadualtomador',
            $rps->inscricaoestadualtomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'inscricaomunicipaltomador',
            $rps->inscricaomunicipaltomador,
            true,
            'Fone Tomador',
            false
        );

        self::$dom->addChild(
            $nfd,
            'observacao',
            $rps->observacao,
            true,
            'observacao',
            false
        );

        if (!empty($rps->faturas)) {
            /** Faturas **/
            $tbfatura =  self::$dom->createElement('tbfatura');

            foreach ($rps->faturas as $faturaInf) {
                //fatura
                $fatura =  self::$dom->createElement('fatura');
                self::$dom->addChild(
                    $fatura,
                    'numfatura',
                    $faturaInf->numfatura,
                    true,
                    'numfatura',
                    false
                );

                self::$dom->addChild(
                    $fatura,
                    'vencimentofatura',
                    $faturaInf->vencimentofatura->format('d/m/Y'),
                    true,
                    'vencimentofatura',
                    false
                );

                self::$dom->addChild(
                    $fatura,
                    'valorfatura',
                    number_format($faturaInf->valorfatura, 2, ',', ''),
                    true,
                    'valorfatura',
                    false
                );

                $dom->appChild($tbfatura, $fatura, 'Adicionando tag fatura em tbfatura');
                $nfd->appendChild($tbfatura);
            }
        }
        /** Serviços **/
        $tbservico =  self::$dom->createElement('tbservico');

        foreach ($rps->servicos as $servicoInf) {
            //servico
            $servico =  self::$dom->createElement('servico');
            self::$dom->addChild(
                $servico,
                'quantidade',
                number_format($servicoInf->quantidade, 2, ',', ''),
                true,
                'quantidade',
                false
            );

            self::$dom->addChild(
                $servico,
                'descricao',
                $servicoInf->descricao,
                true,
                'descricao',
                false
            );

            self::$dom->addChild(
                $servico,
                'codatividade',
                $servicoInf->codatividade,
                true,
                'codatividade',
                false
            );

            self::$dom->addChild(
                $servico,
                'valorunitario',
                number_format($servicoInf->valorunitario, 2, ',', ''),
                true,
                'valorunit,ario',
                false
            );

            self::$dom->addChild(
                $servico,
                'aliquota',
                number_format($servicoInf->aliquota, 2, ',', ''),
                true,
                'aliquota',
                false
            );

            self::$dom->addChild(
                $servico,
                'impostoretido',
                $servicoInf->impostoretido,
                true,
                'impostoretido',
                false
            );

            $dom->appChild($tbservico, $servico, 'Adicionando tag servico em tbservico');
        }

        $nfd->appendChild($tbservico);


        self::$dom->addChild(
            $nfd,
            'razaotransportadora',
            $rps->razaotransportadora,
            true,
            'razaotransportadora',
            false
        );

        self::$dom->addChild(
            $nfd,
            'cpfcnpjtransportadora',
            $rps->cpfcnpjtransportadora,
            true,
            'cpfcnpjtransportadora',
            false
        );

        self::$dom->addChild(
            $nfd,
            'enderecotransportadora',
            $rps->enderecotransportadora,
            true,
            'enderecotransportadora',
            false
        );

        self::$dom->addChild(
            $nfd,
            'tipofrete',
            '',
            true,
            'tipofrete',
            false
        );

        self::$dom->addChild(
            $nfd,
            'quantidade',
            $rps->quantidade,
            true,
            'quantidade',
            false
        );


        self::$dom->addChild(
            $nfd,
            'especie',
            $rps->especie,
            true,
            'especie',
            false
        );

        self::$dom->addChild(
            $nfd,
            'pesoliquido',
            //number_format($rps->pesoliquido, 2, ',', ''),
            "",
            true,
            'pesoliquido',
            false
        );

        self::$dom->addChild(
            $nfd,
            'pesobruto',
            //number_format($rps->pesobruto, 2, ',', ''),
            "",
            true,
            'pesobruto',
            false
        );


        self::$dom->addChild(
            $nfd,
            'pis',
            number_format($rps->pis, 2, ',', ''),
            true,
            'pis',
            false
        );
        self::$dom->addChild(
            $nfd,
            'cofins',
            number_format($rps->cofins, 2, ',', ''),
            false,
            'cofins',
            false
        );
        self::$dom->addChild(
            $nfd,
            'csll',
            number_format($rps->csll, 2, ',', ''),
            false,
            'csll',
            false
        );
        self::$dom->addChild(
            $nfd,
            'irrf',
            number_format($rps->irrf, 2, ',', ''),
            true,
            'irrf',
            false
        );

        self::$dom->addChild(
            $nfd,
            'inss',
            number_format($rps->inss, 2, ',', ''),
            true,
            'inss',
            false
        );

        self::$dom->addChild(
            $nfd,
            'descdeducoesconstrucao',
            $rps->descdeducoesconstrucao,
            true,
            'descdeducoesconstrucao',
            false
        );

        self::$dom->addChild(
            $nfd,
            'totaldeducoesconstrucao',
            number_format($rps->totaldeducoesconstrucao, 2, ',', ''),
            true,
            'totaldeducoesconstrucao',
            false
        );

        self::$dom->addChild(
            $nfd,
            'tributadonomunicipio',
            $rps->tributadonomunicipio,
            true,
            'tributadonomunicipio',
            false
        );

        self::$dom->addChild(
            $nfd,
            'numerort',
            $lote,
            true,
            'Número do lote',
            false
        );


        self::$dom->addChild(
            $nfd,
            'codigoseriert',
            $rps->codigoseriert,
            false,
            'codigoseriert',
            false
        );
        self::$dom->addChild(
            $nfd,
            'dataemissaort',
            $rps->dataemissaort->format('d/m/Y'),
            true,
            'dataemissaort',
            false
        );

        if (!empty($rps->fatorgerador)) {
            self::$dom->addChild(
                $nfd,
                'fatorgerador',
                $rps->fatorgerador,
                true,
                'fatorgerador',
                false
            );
        }

        return $nfd;
    }
}
