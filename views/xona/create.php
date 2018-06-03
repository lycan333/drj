<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Xona */

$this->title = 'Xona yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Xonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

