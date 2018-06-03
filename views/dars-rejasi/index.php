<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\DarsRejasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dars Rejasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dars-rejasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dars Jadvali qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}',

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'Fan_id',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Fanlar::find()->all(), 'id', 'Fan'),
                'value' => 'fan.Fan'
            ],
            [
                'attribute' => 'xona_id',
                'value' => 'xona.num'
            ],
            'para',
            [
                'attribute' => 'kun',
                'filter' => [
                    'Dushanba',
                    'Seshanba',
                    'Chorshanba',
                    'Payshanba',
                    'Juma',
                    'Shanba'
                ],
                'value' => function ($m) {
                    return $m->hafatakuni[$m->kun];
                }
            ],
            [
                'attribute' => 'Fantype',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Roomtype::find()->all(), 'id', 'Name'),
                'value' => 'fantype.Name'
            ],
            [
                'attribute' => 'Gid',
                'value' => 'g.nomi'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
