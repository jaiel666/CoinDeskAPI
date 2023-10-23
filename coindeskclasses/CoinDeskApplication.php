<?php

namespace App;

use Carbon\Carbon;

class CoinDeskApplication
{
    public function run()
    {
        $currentDateTime = Carbon::now('Europe/Riga');
        $api = new CoinDeskAPI();
        $data = $api->fetchDataFromAPI();
        $coinPrice = new CoinPrice($data);

        echo "Current Date and Time: " . $currentDateTime->format('Y/m/d H:i A') . "\n";
        echo "Current Bitcoin Price In USD: " . $coinPrice->getUSDPrice() . " In GBP: " . $coinPrice->getGBPPrice() . " In EUR: " . $coinPrice->getEURPrice() . "\n";
    }
}
