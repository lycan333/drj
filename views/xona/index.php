<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\XonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xonas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xona-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Xona kiritish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'Xona_Turi',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Roomtype::find()->all(),'id','Name'),
                'value' => 'xonaTuri.Name'
            ],
            [
                    'attribute'=>'num',
            ],
            'T_soni',
            [
                'attribute' => 'Korpus_id',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Korpus::find()->all(),'id','nomi'),
                'value' => 'korpus.nomi'
            ],
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
