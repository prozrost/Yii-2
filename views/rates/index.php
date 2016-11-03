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
    <?php if($type == 'USA') {?>
    <div class="main_wrap">
        <div class="buy">
            <h3> Покупка </h3>
            <p><?php print_r($privatdata[2]["buy"])?></p>
            <p><?php print_r($nbudata[14]["rate"])?></p>
            <p><?php print_r($mejdata[0]["Buy"])?></p>
            <p><?php print_r($blackdata[0]["Buy"])?></p>
        </div>
        <div class="sale">
            <h3> Продажа </h3>
            <p><?php print_r($privatdata[2]["sale"])?></p>
            <p><?php print_r($nbudata[14]["rate"])?></p>
            <p><?php print_r($mejdata[0]["Sale"])?></p>
            <p><?php print_r($blackdata[0]["Sale"])?></p>
        </div>
        <div class="avg_rate">
            <h3>Средний курс на сегодня:</h3>
            <?php print_r($avgUSA)?>
        </div>
    </div>
    <?php }?>

    <?php if($type == 'RUR') { ?>
    <div class="main_wrap">
        <div class="buy">
            <h3> Покупка </h3>
            <p><?php print_r($privatdata[1]["buy"])?></p>
            <p><?php print_r($nbudata[28]["rate"])?></p>
            <p><?php print_r($mejdata[2]["Buy"])?></p>
            <p><?php print_r($blackdata[2]["Buy"])?></p>
        </div>
        <div class="sale">
            <h3> Продажа </h3>
            <p><?php print_r($privatdata[1]["sale"])?></p>
            <p><?php print_r($nbudata[28]["rate"])?></p>
            <p><?php print_r($mejdata[2]["Sale"])?></p>
            <p><?php print_r($blackdata[2]["Sale"])?></p>
        </div>
        <div class="avg_rate">
            <h3>Средний курс на сегодня:</h3>
            <?php print_r($avgRUR)?>
        </div>
    </div>
        <?php }?>

<?php if($type == 'Euro') { ?>
    <div class="main_wrap">
        <div class="buy">
            <h3> Покупка </h3>
            <p><?php print_r($privatdata[0]["buy"])?></p>
            <p><?php print_r($nbudata[23]["rate"])?></p>
            <p><?php print_r($mejdata[1]["Buy"])?></p>
            <p><?php print_r($blackdata[1]["Buy"])?></p>
        </div>
        <div class="sale">
            <h3> Продажа </h3>
            <p><?php print_r($privatdata[0]["sale"])?></p>
            <p><?php print_r($nbudata[23]["rate"])?></p>
            <p><?php print_r($mejdata[1]["Sale"])?></p>
            <p><?php print_r($blackdata[1]["Sale"])?></p>
        </div>
        <div class="avg_rate">
            <h3>Средний курс на сегодня:</h3>
<?php print_r($avgEuro)?>
        </div>
    </div>
    <?php }?>


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
