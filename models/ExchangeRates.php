<?php
namespace app\models;

use yii;
use yii\base\Model;
use yii\httpclient\Client;

class ExchangeRates extends Model
{
    public $client;
    public function __construct()
    {
        $this->client = new Client();
    }
    public function getPrivatRate()
    {
        $url = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
        return $this->getRates($url);
    }
    public function getNationalRate()
    {
        $url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json';
        return $this->getRates($url);
    }
    public function getMejBankRate()
    {
        $url = 'http://api.cashex.com.ua/api/v1/exchange/mejbank';
        return $this->getRates($url);
    }
    public function getBlackMarketRate()
    {
        $url = 'http://api.cashex.com.ua/api/v1/exchange/black-market';
        return $this->getRates($url);
    }
    private function getRates($url)
    {
        $response = $this->client->createRequest()
        ->setMethod('get')
        ->setUrl($url)
        ->send();
        return json_decode($response->content, true);
    }
}
