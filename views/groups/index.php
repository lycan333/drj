<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\GroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Guruh qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>'{items}{pager}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomi',
            'kurs',
            [
                    'attribute'=>'Fakul_ID',
                'value'=>'fakul.nomi',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Fakulted::find()->all(),'id','nomi')
            ],
            'tsoni',
            [
                    'attribute'=>'flow_id',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Flows::find()->all(),'id','name'),
                'value'=>'flow.name'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
