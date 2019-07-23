<?php
namespace Geotools\Validators;
use \GeoTools\Constants\Countries;

class Country
{
    public function isValidCountryCode($countryCode, $allowLowerCase = false) {
        $countryCode = $allowLowerCase ? strtoupper($countryCode) : $countryCode;

        return array_key_exists($countryCode, Countries::COUNTRIES_LIST);
    }
}