<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AppConfig */

$this->title = 'Configuración';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-config-view">

    <!--<h2><?= Html::encode($this->title) ?></h2>-->

    <p>
        <?= Html::a(Yii::t('app', '<i class="fa fa-sync-alt"></i> Actualizar'), ['update'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'app_title',
            'about',
            'address',
            'email:email',
            'phone',
        ],
    ]) ?>

</div>
