<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Курс валют';
?>
<div class="site-about">
    <h2> Курс валют на сегодня</h2>
    <div class="banks">
        <h3>Банки:</h3>
        <h4>ПриватБанк</h4>
        <h4>НБУ</h4>
        <h4>МежБанк</h4>
        <h4>Черный рынок</h4>
    </div>
    <div class="buy">
        <h3> Покупка </h3>
        <h4>fkdjfkdj</h4>
        <p><?php print_r($privatdata[2]["buy"])?></p>
        <p><?php print_r($nbudata[0]["rate"])?></p>
        <p><?php print_r($mejdata[0]["Buy"])?></p>
        <p><?php print_r($blackdata[0]["Buy"])?></p>
    </div>
    <div class="sale">
        <h3> Продажа </h3>
        <p><?php print_r($privatdata[2]["sale"])?></p>
        <p><?php print_r($nbudata[0]["rate"])?></p>
        <p><?php print_r($mejdata[0]["Sale"])?></p>
        <p><?php print_r($blackdata[0]["Sale"])?></p>
    </div>

</div>
<style>
div {
    display: inline-block;
}
h3 {
    color:red;
}
</style>
