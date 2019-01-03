<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Role */

$this->title = Yii::t('app', 'Agregar Role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-create">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
