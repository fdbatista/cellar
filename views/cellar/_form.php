<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cellar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cellar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '<i class="fa fa-check"></i> Aceptar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
