<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Xona */

$this->title = 'Xona: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Xonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
