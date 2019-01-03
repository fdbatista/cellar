<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserRole */

$this->title = Yii::t('app', 'Agregar User Role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-role-create">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
