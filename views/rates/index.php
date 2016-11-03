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

            <p><?= $avgSum ?>
        </div>
    </div>




<style>
body{
    background-color: #3333cc;
}
.links {
    display: block;
    margin-left: 80%;
    color:white;
}
div {
    display: inline-block !important;
    overflow: auto;
    margin-left: 50px;
    vertical-align: top;
    color:white;
}

.avg_rate {
    margin-left: 250px;
    margin-top: 6%;
}
.avg_rate p{
    display: inline-block;
    font-size: 45px;
    margin-left: 75px;
    color: #ffff00;
}
.links a {
    margin-left: 15px;
    color:white;
    border:1px solid white;
    border-radius: 10px;
    padding: 1px;
    text-decoration: none;
}
.links a:active{
    background-color: white;
}
.links a:hover{
    background-color: white;
    color:#3333cc;
}
</style>
