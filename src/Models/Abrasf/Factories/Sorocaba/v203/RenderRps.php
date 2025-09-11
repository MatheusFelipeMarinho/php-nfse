<?php

namespace NFePHP\NFSe\Models\Abrasf\Factories\Sorocaba\v203;


use NFePHP\Common\Certificate;
use NFePHP\NFSe\Models\Abrasf\Factories\v203\RenderRps as RenderV3;

class RenderRps extends RenderV3
{
    public static function appendRps(
        $data,
        \DateTimeZone $timezone,
        Certificate $certificate,
        $algorithm = OPENSSL_ALGO_SHA1,
        &$dom,
        &$parent
    ) {

        self::$certificate = $certificate;
        self::$algorithm = $algorithm;
        self::$timezone = $timezone;

        if(strlen($data->infCodigoCnae) != 9) {
            $data->infCodigoCnae = str_pad($data->infCodigoCnae, 9, 0);
        }
        if (is_object($data)) {
            //Gera a RPS
            $rootNode = self::render($data, $dom, $parent);
        }
    }
}
