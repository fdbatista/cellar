<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = Yii::t('app', 'Actualizar bebida');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bebidas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="product-update">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
