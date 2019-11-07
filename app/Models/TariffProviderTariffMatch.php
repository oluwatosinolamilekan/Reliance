<?php

namespace App\Models;

class TariffProviderTariffMatch
{
    //select all data from TariffProviderTariffMatch
    public static function all()
    {
        $select = mysql_query("select from * tariff_provider_tariff_match");
        return $select;
    }
}