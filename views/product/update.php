<?php

use app\models\Product;
use yii\web\View;

/* @var $this View */
/* @var $model Product */

$this->title = Yii::t('app', 'Actualizar bebida');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bebidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cellar->name. " - botella $model->number", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>

<div class="product-update">
    <?= $this->render('_form', [
        'model' => $model, 'dropdowns' => $dropdowns, 'type_id' => $model->categoryType->type_id
    ]) ?>
</div>
