<?php

namespace Stellanamonje\StringHelpers;

class CurrencyConverter
{
    private $rate = 25; // Example rate: 1 USD = 25 ZMW

    public function convert($amount, $currency)
    {
        if ($currency === 'USD') {
            return $amount * $this->rate; // USD to ZMW
        } elseif ($currency === 'ZMW') {
            return $amount / $this->rate; // ZMW to USD
        } else {
            throw new \InvalidArgumentException('Currency must be USD or ZMW.');
        }
    }
}
