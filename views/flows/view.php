<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Flows */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Flows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flows-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute'=>'faku_id',
                'value'=>function ($data) {
                    return $data->faku->nomi;
                },
            ],
            'course',
            'Study_year',
        ],
    ]) ?>

</div>
