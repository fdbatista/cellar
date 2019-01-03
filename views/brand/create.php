<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Brand */

$this->title = Yii::t('app', 'Agregar Brand');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Marcas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-create">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
