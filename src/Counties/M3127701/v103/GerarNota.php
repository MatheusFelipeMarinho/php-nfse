<?php

namespace NFePHP\NFSe\Counties\M3127701\v103;

use NFePHP\NFSe\Common\DOMImproved as Dom;
use NFePHP\NFSe\Models\SIGISS\Factories\Factory;

class GerarNota extends Factory
{
    /**
     * Método usado para gerar o XML do Soap Request
     * @param $versao
     * @param $rpss
     * @return string
     */
    public function render(
        $versao,
        $rps
    ) {
        $method = 'GerarNota';
        $xsd = "nfse-valadares-schema-v1_03";
        list($ano, $mes, $dia) = explode("-", $rps->infDataEmissao->format('Y-m-d'));

        $body = [
            'ccm' => $rps->infPrestador['ccm'],
            'cnpj' => preg_replace('/[.\/-]/', '', $rps->infPrestador['cnpjcpf']),
            'senha' => $rps->infPrestador['senha_usuario'],
            'aliquota_simples' => $rps->infAliquota,
            'servico' => $rps->infServico,
            'situacao' => 'tp',
            'valor' => $rps->infValor,
            'base' => $rps->infBase,

            'descricaoNF' => $rps->infDescricaoNF,
            'tomador_tipo' => $rps->infTomador['tipo'],
            'tomador_cnpj' =>  preg_replace('/[.\/-]/', '', $rps->infTomador['cnpjcpf']),
            'tomador_email' =>  $rps->infTomador['email'],
            'tomador_ie' => $rps->infTomador['ie'],
            'tomador_im' => $rps->infTomador['im'],
            'tomador_razao' =>  $rps->infTomador['razao'],
            'tomador_fantasia' =>  $rps->infTomador['razao'],
            'tomador_endereco' => $rps->infTomadorEndereco['end'],
            'tomador_numero' => $rps->infTomadorEndereco['numero'],
            'tomador_complemento' => $rps->infTomadorEndereco['complemento'],
            'tomador_bairro' => $rps->infTomadorEndereco['bairro'],
            'tomador_CEP' =>   $rps->infTomadorEndereco['cep'],
            'tomador_cod_cidade' =>   $rps->infTomadorEndereco['cmun'],
            'tomador_fone' => $rps->infTomador['tel'],
            'tomador_ramal' =>  $rps->infTomador['ramal'],
            'tomador_fax' =>  $rps->infTomador['fax'],
            'rps_num' => $rps->infNumero,
            'rps_serie' => $rps->infSerie,
            'rps_dia' => $dia,
            'rps_mes' => $mes,
            'rps_ano' => $ano,
            'outro_municipio' => '',
            'cod_outro_municipio' => '',
            'retencao_iss' =>  $rps->infRetencaoIss,
            'pis' => $rps->infPis,
            'cofins' => $rps->infCofins,
            'inss' => $rps->infInss,
            'irrf' => $rps->infIr,
            'csll' => $rps->infCsll,
            'tipo_obra' => '',
            'dia_emissao' => $dia,
            'mes_emissao' => $mes,
            'ano_emissao' => $ano,
            'crc' => '',
            'crc_estado' => '',
            'id_sis_legado' => '',
        ];

        return $body;
    }
}
