<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AppConfig */

$this->title = Yii::t('app', 'Actualizar configuración');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Configuración'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="app-config-update">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
