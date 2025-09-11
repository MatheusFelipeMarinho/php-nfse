<?php

namespace NFePHP\NFSe\Models\Smartpd;

/**
 * Classe a construção do xml dos RPS para o modelo Smartpd
 * ATENÇÃO:
 *  - O modelo Smartpd tem multiplas versões em uso, por vários municipos
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Models\Smartpd\Rps
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */
use Respect\Validation\Validator;
use NFePHP\NFSe\Common\Rps as RpsBase;

class Rps extends RpsBase
{
    /**
     * @var int
     */
    public $numeronfd = 0;

    /**
     * @var int
     */
    public $codseriedocumento = 7;

    /**
     * @var int
     */
    public $codnaturezaoperacao;

    /**
     * @var int
     */
    public $codigocidade;

    /**
     * @var int
     */
    public $inscricaomunicipalemissor;

    /**
     * @var DateTime
     */
    public $dataemissao;
    
    /**
     * @var string
     */
    public $razaotomador;
    
    /**
     * @var string
     */
    public $nomefantasiatomador;
    
    /**
     * @var string
     */
    public $enderecotomador;
    
    /**
     * @var string
     */
    public $cidadetomador;
    
    /**
     * @var string
     */
    public $estadotomador;
    
    /**
     * @var string
     */
    public $paistomador;
    
    /**
     * @var string
     */
    public $fonetomador;
    
    /**
     * @var string
     */
    public $faxtomador;
    
    /**
     * @var string
     */
    public $ceptomador;
    
    /**
     * @var string
     */
    public $bairrotomador;
    
    /**
     * @var string
     */
    public $emailtomador;
    
    /**
     * @var string
     */
    public $cpfcnpjtomador;
    
    /**
     * @var string
     */
    public $inscricaoestadualtomador;
    
    /**
     * @var string
     */
    public $inscricaomunicipaltomador;
    
    /**
     * @var string
     */
    public $observacao;
    
    /**
     * @var string
     */
    public $tbfatura;
    
    /**
     * @var string
     */
    public $fatura;
    
    /**
     * @var string
     */
    public $numfatura;
    
    /**
     * @var string
     */
    public $vencimentofatura;
    
    /**
     * @var string
     */
    public $valorfatura;
    
    /**
    * @var array servicos
    */
    public $servicos = [];
    
    /**
    * @var array faturas
    */
    public $faturas = [];

    /**
     * @var string
     */
    public $razaotransportadora;
    
    /**
     * @var string
     */
    public $cpfcnpjtransportadora;
    
    /**
     * @var string
     */
    public $enderecotransportadora;
    
    /**
     * @var string
     */
    public $tipofrete;
    
    /**
     * @var string
     */
    public $quantidade;
    
    /**
     * @var string
     */
    public $especie;
    /**
     * @var string
     */
    public $tppessoa;
    /**
     * @var float
     */
    public $pesoliquido;
    
    /**
     * @var float
     */
    public $pesobruto;
    
    /**
     * @var float
     */
    public $pis;
    
    /**
     * @var float
     */
    public $cofins;
    
    /**
     * @var float
     */
    public $csll;
    
    /**
     * @var float
     */
    public $irrf;
    
    /**
     * @var float
     */
    public $inss;
    
    /**
     * @var string
     */
    public $descdeducoesconstrucao;
    
    /**
     * @var string
     */
    public $totaldeducoesconstrucao;
    
    /**
     * @var string
     */
    public $tributadonomunicipio;
    
    /**
     * @var string
     */
    public $codigoseriert;
    
    /**
     * @var DateTime
     */
    public $dataemissaort;

    /**
     * @var DateTime
     */
    public $fatorgerador;
    
    /**
     * @var string
     */
    public $numerofatura;

    /**
     * Set number of numeronfd
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function numeronfd($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O numeronfd deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->numeronfd = $value;
    }

    /**
     * Set number of codseriedocumento
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function codseriedocumento($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O codseriedocumento deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->codseriedocumento = $value;
    }

    /**
     * Set number of codnaturezaoperacao
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function codnaturezaoperacao($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O codnaturezaoperacao deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->codnaturezaoperacao = $value;
    }

    /**
     * Set number of codigocidade
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function codigocidade($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O codigocidade deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->codigocidade = $value;
    }

    /**
     * Set number of inscricaomunicipalemissor
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function inscricaomunicipalemissor($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O inscricaomunicipalemissor deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->inscricaomunicipalemissor = $value;
    }

    /**
     * Set date of issue
     * @param DateTime $value
     */
    public function dataemissao(\DateTime $value)
    {
        $this->dataemissao = $value;
    }

    /**
     * Set date of issue
     * @param StdClass $servico
     */
    public function addservico(\StdClass $servico)
    {
        $this->servicos[] = $servico;
    }

    /**
     * Set date of issue
     * @param StdClass $servico
     */
    public function addfatura(\StdClass $fatura)
    {
        $this->faturas[] = $fatura;
    }

    /**
     * Set number of razaotomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function razaotomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A razaotomador não pode ser vazia e deve ter até 150 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 150 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 150)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->razaotomador = $value;
    }

    /**
     * Set number of nomefantasiatomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function nomefantasiatomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A nomefantasiatomador não pode ser vazia e deve ter até 150 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 150 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 150)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->nomefantasiatomador = $value;
    }

    /**
     * Set number of enderecotomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function enderecotomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A enderecotomador não pode ser vazia e deve ter até 255 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 255 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 255)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->enderecotomador = $value;
    }

    /**
     * Set number of cidadetomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function cidadetomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A cidadetomador não pode ser vazia e deve ter até 60 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 60 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 60)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->cidadetomador = $value;
    }

    /**
     * Set number of estadotomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function estadotomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A estadotomador não pode ser vazia e deve ter até 2 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 2 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(2, 2)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->estadotomador = $value;
    }

    /**
     * Set number of paistomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function paistomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A paistomador não pode ser vazia e deve ter até 60 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 60 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 60)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->paistomador = $value;
    }

    /**
     * Set number of fonetomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function fonetomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A fonetomador não pode ser vazia e deve ter até 30 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 30 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 30)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->fonetomador = $value;
    }

    /**
     * Set number of faxtomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function faxtomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A faxtomador deve ter até 20 caracteres.";
        } else {
            $msg = "O item '$campo' deve ter até 20 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 20)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->faxtomador = $value;
    }

    /**
     * Set number of ceptomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function ceptomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A ceptomador não pode ser vazia e deve ter até 10 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 10 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 10)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->ceptomador = $value;
    }

    /**
     * Set number of bairrotomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function bairrotomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A bairrotomador não pode ser vazia e deve ter até 60 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 60 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 60)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->bairrotomador = $value;
    }

    /**
     * Set number of emailtomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function emailtomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A emailtomador não pode ser vazia e deve ter até 255 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 255 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 255)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->emailtomador = $value;
    }

    /**
     * Set number of cpfcnpjtomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function cpfcnpjtomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A cpfcnpjtomador não pode ser vazia e deve ter até 18 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 18 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 18)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->cpfcnpjtomador = $value;
    }

    /**
     * Set number of inscricaoestadualtomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function inscricaoestadualtomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A inscricaoestadualtomador não pode ser vazia e deve ter até 25 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 25 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 25)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->inscricaoestadualtomador = $value;
    }

    /**
     * Set number of inscricaomunicipaltomador
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function inscricaomunicipaltomador($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A inscricaomunicipaltomador não pode ser vazia e deve ter até 20 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 20 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 20)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->inscricaomunicipaltomador = $value;
    }

    /**
     * Set number of razaotransportadora
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function razaotransportadora($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A razaotransportadora não pode ser vazia e deve ter até 150 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 150 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 150)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->razaotransportadora = $value;
    }

    /**
     * Set number of cpfcnpjtransportadora
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function cpfcnpjtransportadora($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A cpfcnpjtransportadora não pode ser vazia e deve ter até 20 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 20 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 20)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->cpfcnpjtransportadora = $value;
    }

    /**
     * Set number of numeroendereco
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function numeroendereco($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A numeroendereco não pode ser vazia e deve ter até 10 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 10 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 10)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->numeroendereco = $value;
    }

    /**
     * Set number of tppessoa
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function tppessoa($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A tppessoa não pode ser vazia e deve ter até 1 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 1 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 1)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->tppessoa = $value;
    }

    /**
     * Set number of observacao
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function observacao($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A observacao não pode ser vazia e deve ter até 255 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 255 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 255)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->observacao = $value;
    }

    /**
     * Set number of enderecotransportadora
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function enderecotransportadora($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A enderecotransportadora não pode ser vazia e deve ter até 255 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 255 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!empty($value) && !Validator::stringType()->length(1, 255)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->enderecotransportadora = $value;
    }

    /**
     * Set number of tipofrete
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function tipofrete($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A tipofrete não pode ser vazia e deve ter até 100 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 100 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 100)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->tipofrete = $value;
    }
    
    /**
     * Set number of quantidade
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function quantidade($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->quantidade = $value;
    }

    /**
     * Set number of especie
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function especie($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A tipofrete não pode ser vazia e deve ter até 50 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 50 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(1, 50)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->especie = $value;
    }

    /**
     * Set number of pesoliquido
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function pesoliquido($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->pesoliquido = $value;
    }

    /**
     * Set number of pesobruto
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function pesobruto($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->pesobruto = $value;
    }

    /**
     * Set number of pis
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function pis($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->pis = $value;
    }

    /**
     * Set number of cofins
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function cofins($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->cofins = $value;
    }

    /**
     * Set number of csll
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function csll($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->csll = $value;
    }

    /**
     * Set number of irrf
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function irrf($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->irrf = $value;
    }

    /**
     * Set number of inss
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function inss($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->inss = $value;
    }

    /**
     * Set number of descdeducoesconstrucao
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function descdeducoesconstrucao($value, $campo = null)
    {
        if (!$campo) {
            $msg = "A descição da deducoes não pode ser vazia e deve ter até 255 caracteres.";
        } else {
            $msg = "O item '$campo' não pode ser vazio e deve ter até 255 caracteres. Informado: '$value'";
        }

        $value = trim($value);
        if (!Validator::stringType()->length(0, 255)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->descdeducoesconstrucao = $value;
    }

    /**
     * Set number of totaldeducoesconstrucao
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function totaldeducoesconstrucao($value, $campo = null)
    {
        if (!$campo) {
            $msg = "Os valores devem ser numericos tipo float.";
        } else {
            $msg = "O item '$campo' deve ser numérico tipo float. Informado: '$value'";
        }

        if (!empty($value) && !Validator::numeric()->floatVal()->min(0)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->totaldeducoesconstrucao = $value;
    }

    /**
     * Set number of tributadonomunicipio
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function tributadonomunicipio($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O tributadonomunicipio deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
           // throw new \InvalidArgumentException($msg);
        }

        $this->tributadonomunicipio = $value;
    }

    /**
     * Set number of codigoseriert
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function codigoseriert($value, $campo = null)
    {
        if (!$campo) {
            $msg = "O codigoseriert deve ser um inteiro positivo apenas.";
        } else {
            $msg = "O item '$campo' deve ser um inteiro positivo apenas. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->positive()->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }

        $this->codigoseriert = $value;
    }
    
    /**
     * Set date of issue
     * @param DateTime $value
     */
    public function dataemissaort(\DateTime $value)
    {
        $this->dataemissaort = $value;
    }

    /**
     * Set date of issue
     * @param DateTime $value
     */
    public function fatorgerador(\DateTime $value)
    {
        $this->fatorgerador = $value;
    }
}
