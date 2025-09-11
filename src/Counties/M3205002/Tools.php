<?php

namespace NFePHP\NFSe\Counties\M3205002;

/**
 * Classe para a comunicação com os webservices da
 * Cidade de Serra ES
 * conforme o modelo Smartpd
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Counties\3205002\Tools
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Maykon da S. de Siqueira <maykon at multilig dot com dot br>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use NFePHP\NFSe\Models\Smartpd\Tools as ToolsModel;

class Tools extends ToolsModel
{
    /**
     * Webservices URL
     * @var array
     */

    //O ambiente de produção e homologação são o mesmo, onde deve-se solicitar alteração na prefeitura de Goiânia para entrar/sair do modo TESTE
    protected $urlEntrada = [
        1 => 'http://apps.serra.es.gov.br:8080/tbw/services/WSEntrada',
        2 => 'http://apps.serra.es.gov.br:8080/tbw/services/WSEntrada'
    ];

    protected $urlSaida = [
        1 => 'http://apps.serra.es.gov.br:8080/tbw/services/WSSaida',
        2 => 'http://apps.serra.es.gov.br:8080/tbw/services/WSSaida'
    ];

    protected $urlUtil = [
        1 => 'http://apps.serra.es.gov.br:8080/tbw/services/WSUtil',
        2 => 'http://apps.serra.es.gov.br:8080/tbw/services/WSUtil'
    ];
    /**
     * County Namespace
     * @var string
     */
    protected $xmlns = 'http://nfse.Smartpd.go.gov.br/xsd/nfse_gyn_v02.xsd';

    /**
     * Soap Version
     * @var int
     */
    protected $soapversion = SOAP_1_1;
    /**
     * SIAFI County Cod
     * @var int
     */
    protected $codcidade = 5699;
    /**
     * Indicates when use CDATA string on message
     * @var boolean
     */
    protected $withcdata = false;
    /**
     * Encription signature algorithm
     * @var string
     */
    protected $algorithm = OPENSSL_ALGO_SHA1;
    /**
     * Version of schemas
     * @var int
     */
    protected $versao = '100';
    /**
     * namespaces for soap envelope
     * @var array
     */
    protected $namespaces = [
        1 => [
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:web' => "http://webservices.sil.com/"
        ],
        2 => [
            'xmlns:soapenv' => "http://www.w3.org/2003/05/soap-envelope",
            'xmlns:web' => "http://webservices.sil.com/"
        ]
    ];
}
