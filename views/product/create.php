<?php

use app\models\Product;
use yii\web\View;

/* @var $this View */
/* @var $model Product */

$this->title = Yii::t('app', 'Agregar bebida');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bebidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="product-create">
    <?= $this->render('_form', ['model' => $model, 'dropdowns' => $dropdowns, 'type_id' => null]) ?>
</div>
