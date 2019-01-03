<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserRole */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'role_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '<i class="fa fa-check"></i> Aceptar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
