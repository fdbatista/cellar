<?php

use app\models\Product;
use kartik\widgets\DepDrop;
use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model Product */
/* @var $form ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-4">
            <?php
            echo '<label class="control-label">Tipo de bebida</label>';
            echo Select2::widget(['name' => 'type_id', 'id' => 'type_id', 'data' => $dropdowns['categories'], 'pluginOptions' => ['allowClear' => true], 'options' => ['placeholder' => 'Seleccione...']]);
            echo Html::hiddenInput('input-type-1', 'Additional value 1', ['id' => 'input-type-1']);
            echo Html::hiddenInput('input-type-2', 'Additional value 2', ['id' => 'input-type-2']);
            ?>
        </div>
        <div class="col-sm-4">
            <?php
            echo $form->field($model, 'category_type_id')->widget(DepDrop::classname(), [
                'type' => DepDrop::TYPE_SELECT2,
                'data' => [],
                'options' => ['id' => 'subcat1-id', 'placeholder' => 'Seleccione...'],
                'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                'pluginOptions' => [
                    'depends' => ['type_id'],
                    'url' => Url::to(['/product/get-sub-types']),
                    'params' => ['input-type-1', 'input-type-2']
                ]
            ]);
            ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'brand_id')->widget(Select2::classname(), ['data' => $dropdowns['brands'], 'options' => ['placeholder' => 'Seleccione...'], 'pluginOptions' => ['allowClear' => true]]) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4"><?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'number')->textInput() ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'date')->textInput() ?></div>
    </div>
    
    <div class="row">
        <div class="col-sm-4"><?= $form->field($model, 'capacity')->textInput() ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'alcoholic_proof')->textInput() ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'aging')->textInput() ?></div>
    </div>
    
    <div class="row">
        <div class="col-sm-4"><?= $form->field($model, 'price')->textInput() ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'country_id')->widget(Select2::classname(), ['data' => $dropdowns['countries'], 'options' => ['placeholder' => 'Seleccione...'], 'pluginOptions' => ['allowClear' => true]]) ?></div>
        <div class="col-sm-4"><?= $form->field($model, 'cellar_id')->widget(Select2::classname(), ['data' => $dropdowns['cellars'], 'options' => ['placeholder' => 'Seleccione...'], 'pluginOptions' => ['allowClear' => true]]) ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', '<i class="fa fa-check"></i> Aceptar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
