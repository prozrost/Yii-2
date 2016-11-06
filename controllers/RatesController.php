<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\ExchangeRates;
class RatesController extends Controller
{
    public function actionIndex($type = 'USA')
    {
        $model = new ExchangeRates();
        $privatData = $model->getPrivatRate();
        $nbuData = $model->getNationalRate();
        $mejData = $model->getMejBankRate();
        $blackMarketData = $model->getBlackMarketRate();
        $avgUSA = ($privatData[2]["buy"] + $nbuData[40]["rate"] + $mejData[0]["Buy"] + $blackMarketData[0]["Buy"] +
        $privatData[2]["sale"] + $nbuData[40]["rate"] + $mejData[0]["Sale"] + $blackMarketData[0]["Sale"])/8;

        $avgEuro = ($privatData[0]["buy"] + $nbuData[49]["rate"] + $mejData[1]["Buy"] + $blackMarketData[1]["Buy"] +
        $privatData[0]["sale"] + $nbuData[49]["rate"] + $mejData[1]["Sale"] + $blackMarketData[1]["Sale"])/8;

        $avgRUR = ($privatData[1]["buy"] + $nbuData[54]["rate"] + $mejData[2]["Buy"] + $blackMarketData[2]["Buy"] +
        $privatData[1]["sale"] + $nbuData[54]["rate"] + $mejData[2]["Sale"] + $blackMarketData[2]["Sale"])/8;

        if($type == 'USA') {
            $exchangeData = array('privatBuy' => $privatData[2]["buy"], 'privateSale'=>$privatData[2]["sale"], 'nbuRate' => $nbuData[40]['rate'],
            'mejBuy' => $mejData[0]["Buy"],'mejSale' => $mejData[0]["Sale"],'blackBuy' => $blackMarketData[0]["Buy"],'blackSale' => $blackMarketData[0]["Sale"]);
            $avgSum = $avgUSA;
        }
        elseif($type == 'Euro') {
            $exchangeData = array('privatBuy' => $privatData[0]["buy"], 'privateSale' => $privatData[0]["sale"], 'nbuRate' => $nbuData[49]['rate'],
            'mejBuy' => $mejData[1]["Buy"],'mejSale' => $mejData[1]["Sale"],'blackBuy' => $blackMarketData[1]["Buy"],'blackSale' => $blackMarketData[1]["Sale"]);
            $avgSum = $avgEuro;
        }
        elseif($type == 'RUR'){
            $exchangeData = array('privatBuy' => $privatData[1]["buy"], 'privateSale'=> $privatData[1]["sale"], 'nbuRate' => $nbuData[54]['rate'],
            'mejBuy' => $mejData[2]["Buy"],'mejSale' => $mejData[2]["Sale"],'blackBuy' => $blackMarketData[2]["Buy"],'blackSale' => $blackMarketData[2]["Sale"]);
            $avgSum = $avgRUR;
        }
        return $this->render('index',['exchangeData' => $exchangeData, 'avgSum'=>$avgSum]);
    }
}
 ?>
