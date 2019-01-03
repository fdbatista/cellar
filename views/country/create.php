<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = Yii::t('app', 'Agregar Country');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Países'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-create">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
