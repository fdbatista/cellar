<?php

/* @var $this View */

use yii\web\View;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h4 class="text-info"><i class="fa fa-info-circle"></i> <?= $about->about ?></h4>
    <h5 class="text-info"><i class="fa fa-map-marker-alt"></i> <?= $about->address ?></h5>
    <h5 class="text-info"><i class="fa fa-mobile-alt"></i> <?= $about->phone ?></h5>
</div>
