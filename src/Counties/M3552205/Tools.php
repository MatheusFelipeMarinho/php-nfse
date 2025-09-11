<?php

namespace NFePHP\NFSe\Counties\M3552205;

/**
 * Classe para a comunicação com os webservices da
 * Cidade de Sorocaba SP
 * conforme o modelo Abrasf 2.03
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Counties\M3552205\Tools
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use NFePHP\NFSe\Models\Abrasf\Tools as ToolsAbrasf;
use NFePHP\Common\Soap\SoapCurl as SoapCurl;

class Tools extends ToolsAbrasf
{
    /**
     * Webservices URL
     * @var array
     */
    protected $url = [
        1 => 'https://notafiscal.sorocaba.sp.gov.br/notafiscal-abrasfv203-ws/NotaFiscalSoap?wsdl',
        2 => 'https://homolsod.dsfweb.com.br/notafiscal-abrasfv203-ws/NotaFiscalSoap?wsdl'
    ];
    /**
     * County Namespace
     * @var string
     */
    protected $xmlns = 'http://nfse.abrasf.org.br';

    /**
     * Soap Version
     * @var int
     */
    protected $soapversion = SOAP_1_1;
    /**
     * SIAFI County Cod
     * @var int
     */
    protected $codcidade = 7145;
    /**
     * Indicates when use CDATA string on message
     * @var boolean
     */
    protected $withcdata = true;
    /**
     * Encription signature algorithm
     * @var string
     */
    protected $algorithm = OPENSSL_ALGO_SHA1;
    /**
     * Version of schemas
     * @var int
     */
    protected $versao = 203;
    /**
     * namespaces for soap envelope
     * @var array
     */
    protected $namespaces = [
        1 => [
            'xmlns:xd' => "http://www.w3.org/2000/09/xmldsig#",
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:nfse' => "http://nfse.abrasf.org.br"
        ],
        2 => [
            'xmlns:xd' => "http://www.w3.org/2000/09/xmldsig#",
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:nfse' => "http://nfse.abrasf.org.br"
        ]
    ];

    /**
     * @param $lote
     * @param $rpss
     * @return string
     */
    public function recepcionarLoteRpsSincrono($lote, $rpss)
    {
        $class = \NFePHP\NFSe\Models\Abrasf\Factories\Sorocaba\v203\RecepcionarLoteRpsSincrono::class;
        $fact = new $class($this->certificate);

        return $this->recepcionarLoteRpsSincronoCommon($fact, $lote, $rpss);
    }

    /**
     * Monta o request da mensagem SOAP
     * @param string $url
     * @param string $message
     * @return string
     */
    protected function sendRequest($url, $message)
    {
        $this->xmlRequest = $message;

        //Abrasf possui apenas uma URL
        if (!$url) {
            $url = $this->url[$this->config->tpAmb];
        }

        if (!is_object($this->soap)) {
            $this->soap = new SoapCurl($this->certificate);
        }
        //formata o xml da mensagem para o padão esperado pelo webservice
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = false;
        $dom->loadXML($message);

        $message = str_replace('<?xml version="1.0"?>', '', $dom->saveXML());

        $request = $this->makeRequest($message);
        if (!count($this->params)) {
            $this->params = [
                "Content-Type: text/xml;charset=utf-8;",
                "SOAPAction: \"http://www.e-governeapps2.com.br/{$this->method}\""
            ];
        }

        $action = '';

        //Realiza o request SOAP
        return $this->soap->send(
            $url,
            $this->method,
            $action,
            $this->soapversion,
            $this->params,
            $this->namespaces[$this->soapversion],
            $request
        );
    }
}
