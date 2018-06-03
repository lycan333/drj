<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\Searchmodels\KafedraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kafedralar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kafedra-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Kafedra qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'emptyText'=>Yii::$app->params[emptyText],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nomi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
