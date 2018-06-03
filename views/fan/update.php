<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fanlar */

$this->title = 'Fan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
