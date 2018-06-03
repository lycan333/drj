<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fakulted */

$this->title = 'Fakulted';
$this->params['breadcrumbs'][] = ['label' => 'Fakultedlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

