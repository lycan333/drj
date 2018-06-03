<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Flows */

$this->title = 'Patok: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Flows', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
