<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Xona */

$this->title = $model->num."-xona";
$this->params['breadcrumbs'][] = ['label' => 'Xonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Siz buni istaysizmi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
              'attribute'=>'Xona_Turi',
                'value'=>function ($data) {
                    return $data->xonaTuri->Name;
                },
            ],
            'num',
            'T_soni',
            [
                'attribute'=>'Korpus_id',
                'value'=>function ($data) {
                    return $data->korpus->nomi;
                },
            ],
        ],
    ]) ?>

</div>
