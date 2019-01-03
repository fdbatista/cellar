<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryType */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-type-view">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <p>
        <?= Html::a(Yii::t('app', '<i class="fa fa-sync-alt"></i> Actualizar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '<i class="fa fa-trash-alt"></i> Eliminar'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'type_id',
        ],
    ]) ?>

</div>
