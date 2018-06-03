<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DarsRejasi */

$this->title = 'Dars Rejasi: ' . $model->g->nomi;
$this->params['breadcrumbs'][] = ['label' => 'Dars Rejasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
