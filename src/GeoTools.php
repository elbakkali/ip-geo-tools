<?php 

namespace GeoTools;
use \GeoTools\Constants\Countries;

class GeoTools
{
    /**
     * @param  string $countryCode
     * @param  bool $allowLowerCase
     * @return bool
     */
    public function isValidCountryCode($countryCode, $allowLowerCase = false)
    {
        return (new Validators\Country())->isValidCountryCode($countryCode, $allowLowerCase);
    }

    /**
     * @param  string $ip
     * @param  bool $ipv6
     * @return bool
     */
    public function isValidIpAddress($ip, $ipv6 = false)
    {
        return (new Validators\Ip())->isValidIpAddress($ip, $ipv6);
    }

    /**
     * @param  string $countryCode
     * @throws Exception
     * @return string
     */
    public function getCountryByCountryCode($countryCode) {
        $countryCode = strtoupper($countryCode);

        if (!$this->isValidCountryCode($countryCode)) {
            throw new \Exception('Invalid country code');
        }

        return Countries::COUNTRIES_LIST[$countryCode];
    }
}