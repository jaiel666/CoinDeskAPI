<?php

namespace App;

class CoinPrice
{
    private $cryptoDataRate;

    public function __construct($cryptoDataRate)
    {
        $this->cryptoDataRate = $cryptoDataRate;
    }

    public function getUSDPrice(): string
    {
        return $this->cryptoDataRate['bpi']['USD']['rate'];
    }

    public function getGBPPrice(): string
    {
        return $this->cryptoDataRate['bpi']['GBP']['rate'];
    }

    public function getEURPrice(): string
    {
        return $this->cryptoDataRate['bpi']['EUR']['rate'];
    }
}
