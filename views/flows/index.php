<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\FlowsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Patoklar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flows-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Patok kiritish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'faku_id',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Fakulted::find()->all(),'id','nomi'),
                'value' => 'faku.nomi'
            ],
            'course',
            'Study_year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
