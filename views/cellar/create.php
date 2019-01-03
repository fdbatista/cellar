<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cellar */

$this->title = Yii::t('app', 'Agregar colección');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Colecciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cellar-create">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
