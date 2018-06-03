<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectsToFlows */

$this->title = 'Fan va patok: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subjects To Flows', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O\'zgartirish';
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
