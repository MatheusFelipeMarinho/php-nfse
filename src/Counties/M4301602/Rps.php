<?php

namespace NFePHP\NFSe\Counties\M4301602;

use Respect\Validation\Validator;
use NFePHP\NFSe\Models\Abrasf\Rps as RpsAbrasf;
/**
 * Classe a construção do xml da NFSe para a
 * Cidade de Bage RS
 * conforme o modelo ABRASF
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Counties\M3131703\Rps
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Lucas B. Simões <lucas_development at outlook dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

class Rps extends RpsAbrasf
{
    /**
     * Set special tax regime
     * @param int $value
     * @param string $campo - String com o nome do campo caso queira mostrar na mensagem de validação
     * @throws InvalidArgumentException
     */
    public function regimeEspecialTributacao($value = self::REGIME_MICROEMPRESA, $campo = null)
    {
        if (!$campo) {
            $msg = "O regime de tributação deve estar entre 1 e 6.";
        } else {
            $msg = "O item '$campo' deve estar entre 1 e 6. Informado: '$value'";
        }

        if (!Validator::numeric()->intVal()->between(1, 6)->validate($value)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->infRegimeEspecialTributacao = $value;
    }
}
