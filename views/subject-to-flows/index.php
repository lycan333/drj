<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\STFSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fanlarni patoklarga biriktirish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-to-flows-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Fanlarni patoklarga biriktirish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'emptyText'=>Yii::$app->params[emptyText],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute'=>'Flow_id',
                'value'=>'flow.name',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Flows::find()->all(), 'id', 'name')
            ],
            [
                'attribute'=>'Subject_id',
                'value'=>'subject.Fan',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Fanlar::find()->all(), 'id', 'Fan'),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
