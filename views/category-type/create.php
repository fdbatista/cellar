<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryType */

$this->title = Yii::t('app', 'Agregar Category Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-type-create">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
