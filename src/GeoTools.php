<?php 

namespace GeoTools;

class GeoTools
{
    /**
     * @param  string $countryCode
     * @param  bool $allowLowerCase
     * @return bool
     */
    public static function isValidCountryCode($countryCode, $allowLowerCase = false)
    {
        return (new Validators\Country())->isValidCountryCode($countryCode, $allowLowerCase);
    }

    /**
     * @param  string $ip
     * @param  bool $ipv6
     * @return bool
     */
    public static function isValidIpAddress($ip, $ipv6 = false)
    {
        return (new Validators\Ip())->isValidIpAddress($ip, $ipv6);
    }
}