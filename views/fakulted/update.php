<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fakulted */

$this->title = 'Fakulted: ' . $model->nomi;
$this->params['breadcrumbs'][] = ['label' => 'Fakulteds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
