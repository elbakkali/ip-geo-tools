<?php
namespace Geotools\Validators;

class Ip
{
    /**
     * @param  string $ip
     * @param  bool $ipv6
     * @return bool
     */
    public function isValidIpAddress($ip, $ipv6 = false) {
        if ($ipv6) {
            return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
        }

        return filter_var($ip, FILTER_VALIDATE_IP);
    }
}