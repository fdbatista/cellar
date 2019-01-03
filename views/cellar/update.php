<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cellar */

$this->title = Yii::t('app', 'Actualizar colección');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Colecciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="cellar-update">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
