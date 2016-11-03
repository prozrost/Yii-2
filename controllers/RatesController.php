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
        $avgUSA = ($privatData[2]["buy"] + $nbuData[14]["rate"] + $mejData[0]["Buy"] + $blackMarketData[0]["Buy"] +
        $privatData[2]["sale"] + $nbuData[14]["rate"] + $mejData[0]["Sale"] + $blackMarketData[0]["Sale"])/8;
        $avgEuro = ($privatData[0]["buy"] + $nbuData[23]["rate"] + $mejData[1]["Buy"] + $blackMarketData[1]["Buy"] +
        $privatData[0]["sale"] + $nbuData[23]["rate"] + $mejData[1]["Sale"] + $blackMarketData[1]["Sale"])/8;
        $avgRUR = ($privatData[1]["buy"] + $nbuData[28]["rate"] + $mejData[2]["Buy"] + $blackMarketData[2]["Buy"] +
        $privatData[1]["sale"] + $nbuData[28]["rate"] + $mejData[2]["Sale"] + $blackMarketData[2]["Sale"])/8;

        return $this->render('index',['privatdata' => $privatData, 'nbudata' => $nbuData,'mejdata'=>$mejData,'blackdata' => $blackMarketData, 'avgUSA'=>$avgUSA, 'type'=>$type, 'avgEuro' => $avgEuro,'avgRUR' => $avgRUR]);
    }
}
 ?>
