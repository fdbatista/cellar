<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = Yii::t('app', 'Agregar bebida');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bebidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">
    <?= $this->render('_form', ['model' => $model, 'dropdowns' => $dropdowns]) ?>
</div>
