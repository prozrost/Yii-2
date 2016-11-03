<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Курс валют';
?>

    <div class="links">
        <?= Html::a('USA', ['index.php/rates', 'type' => 'USA']) ?>
        <?= Html::a('Euro', ['index.php/rates', 'type' => 'Euro']) ?>
        <?= Html::a('RUR', ['index.php/rates', 'type' => 'RUR']) ?>
    </div>
    <h2> Курс валют на сегодня</h2>
    <div class="banks">
        <h3>Банки:</h3>
        <h4>ПриватБанк</h4>
        <h4>НБУ</h4>
        <h4>МежБанк</h4>
        <h4>Черный рынок</h4>
    </div>

    <div class="main_wrap">
        <div class="buy">
            <h3> Покупка </h3>
            <p><?php print_r($exchangeData["privatBuy"])?></p>
            <p><?php print_r($exchangeData["nbuRate"])?></p>
            <p><?php print_r($exchangeData["mejBuy"])?></p>
            <p><?php print_r($exchangeData["blackBuy"])?></p>
        </div>
        <div class="sale">
            <h3> Продажа </h3>
            <p><?php print_r($exchangeData["privateSale"])?></p>
            <p><?php print_r($exchangeData["nbuRate"])?></p>
            <p><?php print_r($exchangeData["mejSale"])?></p>
            <p><?php print_r($exchangeData["blackSale"])?></p>
        </div>
        <div class="avg_rate">
            <h3>Средний курс на сегодня:</h3>
            <?php print_r($avgSum)?>
        </div>
    </div>
    



<style>
.links {
    display: block;
    margin-left: 80%;
}
div {
    display: inline-block !important;
    overflow: auto;
    margin-left: 50px;
    vertical-align: top;
}
.avg_rate {
    margin-left: 250px;
    margin-top: 6%;
}
a {
    margin-left: 15px;
}
</style>
