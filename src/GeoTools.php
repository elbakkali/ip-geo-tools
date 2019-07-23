<?php 

namespace GeoTools;

class GeoTools
{
    public static function isValidCountryCode($countryCode, $allowLowerCase = false)
    {
        return (new Validators\Country())->isValidCountryCode($countryCode, $allowLowerCase);
    }
}