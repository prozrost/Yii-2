<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h2>PrivatBank:</h2>

    <p>
        Euro:<br>

        <?php var_dump($privatdata[0]["ccy"] ." ". $privatdata[0]["buy"] ." ". $privatdata[0]["sale"]); ?>
</p>
<p>
        RUR:<br>
        <?php var_dump($privatdata[1]["ccy"] ." ". $privatdata[1]["buy"] ." ". $privatdata[1]["sale"]); ?>
</p>
<p>
        USA:<br>
        <?php var_dump($privatdata[2]["ccy"] ." ". $privatdata[2]["buy"] ." ". $privatdata[2]["sale"]); ?>
    </p>

    <h2>NBU:</h2>
    <p>
        Euro:<br>

        <?php var_dump($nbudata[19]["txt"] ." ". $nbudata[19]["rate"] ." ". $nbudata[19]["rate"]); ?>
</p>
<p>
        RUR:<br>
        <?php var_dump($nbudata[24]["txt"] ." ". $nbudata[24]["rate"] ." ". $nbudata[24]["rate"]); ?>
</p>
<p>
        USA:<br>
        <?php var_dump($nbudata[10]["txt"] ." ". $nbudata[10]["rate"] ." ". $nbudata[10]["rate"]); ?>
    </p>

    <h2>Mej Bank:</h2>
    <p>
        Euro:<br>

        <?php var_dump($mejdata[1]["CurrencyName"] ." ". $mejdata[1]["Buy"] ." ". $mejdata[1]["Sale"]); ?>
</p>
<p>
        RUR:<br>
        <?php var_dump($mejdata[2]["CurrencyName"] ." ". $mejdata[2]["Buy"] ." ". $mejdata[2]["Sale"]); ?>
</p>
<p>
        USA:<br>
        <?php var_dump($mejdata[0]["CurrencyName"] ." ". $mejdata[0]["Buy"] ." ". $mejdata[0]["Sale"]); ?>
    </p>

    <h2>Black  Market:</h2>
    <p>
        Euro:<br>
        <?php var_dump($blackdata[1]["CurrencyName"] ." ". $blackdata[1]["Buy"] ." ". $blackdata[1]["Sale"]); ?>
    </p>
    <p>
        RUR:<br>
        <?php var_dump($blackdata[2]["CurrencyName"] ." ". $blackdata[2]["Buy"] ." ". $blackdata[2]["Sale"]); ?>
    </p>
    <p>
        USA:<br>
        <?php var_dump($blackdata[0]["CurrencyName"] ." ". $blackdata[0]["Buy"] ." ". $blackdata[0]["Sale"]); ?>
    </p>
</div>
