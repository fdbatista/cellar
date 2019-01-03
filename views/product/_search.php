<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'capacity') ?>

    <?php // echo $form->field($model, 'alcoholic_proof') ?>

    <?php // echo $form->field($model, 'aging') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'category_type_id') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'cellar_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
