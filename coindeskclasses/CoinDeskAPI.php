<?php

namespace App;

class CoinDeskAPI
{
    private $apiUrl = 'https://api.coindesk.com/v1/bpi/currentprice.json';

    public function fetchDataFromAPI(): array
    {
        $response = file_get_contents($this->apiUrl);
        return json_decode($response, true);
    }
}

