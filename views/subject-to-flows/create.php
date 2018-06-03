<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubjectsToFlows */

$this->title = 'Fanlarni patoklarga biriktirish';
$this->params['breadcrumbs'][] = ['label' => 'Subjects To Flows', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
