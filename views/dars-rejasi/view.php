<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DarsRejasi */

$this->title = $model->g->nomi;
$this->params['breadcrumbs'][] = ['label' => 'Dars Rejasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('O\'zchirish', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>
</p>

<?

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        [
            'attribute' => 'Fan_id',
            'value' => function ($data) {
                return $data->fan->Fan;
            },
        ],
        [
            'attribute' => 'xona_id',
            'value' => function ($data) {
                return $data->xona->num;
            },
        ],
        'para',
        [
            'attribute' => 'kun',
            'value' => function ($data) {
                $kun = [
                    'Dushanba',
                    'Seshanba',
                    'Chorshanba',
                    'Payshanba',
                    'Juma',
                    'Shanba'
                ];
                return $kun[$data->kun];
            },
        ],
        [
            'attribute' => 'Fantype',
            'value' => function ($data) {
                return $data->fantype->Name;
            },
        ],
        [
            'attribute' => 'Gid',
            'value' => function ($data) {
                return $data->g->nomi;
            },
        ],
    ],
]) ?>

</div>
