<?php

namespace dnj\phpvmomi;

use dnj\phpvmomi\DataObjects\DynamicData;

class SoapClient extends \SoapClient
{
    #[\ReturnTypeWillChange]
    public function __call($name, $args) {
        $args = self ::checkForDynamicData($args);
        return $this -> __soapCall($name, $args);
    }

    private static function checkForDynamicData($arguments)
    {
        foreach ($arguments as $key => $argument) {
            $value = $argument;
            if (is_array($value)) {
                $value = self::checkForDynamicData($value);
            } elseif (is_object($value)) {
                if ($value instanceof DynamicData) {
                    $value->getSoapData();
                } else {
                    $value = self::checkForDynamicData($value);
                }
            }
            if (is_object($arguments)) {
                $arguments->$key = $value;
            } elseif (is_array($arguments)) {
                $arguments[$key] = $value;
            }
        }

        return $arguments;
    }
}
